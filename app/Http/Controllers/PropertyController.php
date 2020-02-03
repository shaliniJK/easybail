<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PropertyController extends Controller
{
    private const TYPE_MAISON = 1;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List all properties for the currently authenticated user.
     */
    public function index()
    {
        $user = auth()->user();
        $properties = $user->properties;

        return view('properties.index')->with(compact('user', 'properties'));
    }

    /**
     * Display the details of the specified property.
     *
     * @param Property $property
     */
    public function show(Property $property)
    {
        $this->checkUserAuthorization($property);

        $locataires = $property->locations()->get()
            ->map(function ($location) {
                return $location->locataire()->get();
            })
            ->flatten();

        return view('properties.show', [
            'user' => request()->user(),
            'property' => $property,
            'locataires' => $locataires,
        ]);
    }

    /**
     * Returns the view containing the form to create a new property.
     */
    public function create(Request $request)
    {
        $attributes = $this->getPropertyTypeAttributesFromRequest($request);

        return view('properties.create', [
            'user' => auth()->user(),
            'types' => PropertyType::all(),
            'attributes' => $attributes,
        ]);
    }

    private function getPropertyTypeAttributesFromRequest(Request $request): Collection
    {
        if ($request->type === null) {
            $maison = PropertyType::find(self::TYPE_MAISON);

            return $maison === null ? collect([]) : $maison->attributes;
        }

        $propertyType = PropertyType::find($request->type);

        return $propertyType === null ? collect([]) : $propertyType->attributes;
    }

    /**
     * Creates a new property.
     */
    public function store(Request $request)
    {
        $property = $this->validateProperty();

        $user = $request->user();

        $user->properties()->create($property);

        return redirect(route('properties'))->with('success', 'Votre bien a été ajouté !');
    }

    /**
     * Returns the view containing the form to edit an existing property.
     *
     * @param Property $property
     */
    public function edit(Property $property)
    {
        $this->checkUserAuthorization($property);

        return view('properties.edit', [
            'user' => auth()->user(),
            'property' => $property,
            'types' => PropertyType::all(),
        ]);
    }

    /**
     * Updates the given property.
     *
     * @param Property $property
     */
    public function update(Property $property)
    {
        $this->checkUserAuthorization($property);

        $property->update($this->validateProperty());

        return redirect(route('properties.show', $property->id))->with('success', 'Votre bien a été modifié !');
    }

    /**
     * Destroys the given property.
     *
     * @param Property $property
     */
    public function destroy(Property $property)
    {
        $this->checkUserAuthorization($property);

        $property->delete();

        return redirect(route('properties'))->with('warning', 'Votre bien a été supprimé !');
    }

    protected function validateProperty()
    {
        return request()->validate([
            'address' => 'string|required',
            'address2' => 'string|nullable',
            'city' => 'string|required',
            'postcode' => ['integer', 'digits:5', 'required'],
            'country' => 'string|required',
            'nb_rooms' => ['integer', 'min:0', 'required'],
            'size' => 'integer|nullable',
            'furnished' => 'boolean|required',
            'property_type_id' => 'required|exists:property_types,id',
        ]);
    }

    private function checkUserAuthorization(Property $property)
    {
        $user = request()->user();

        if ($property->user_id !== $user->id) {
            abort(401);
        }
    }
}
