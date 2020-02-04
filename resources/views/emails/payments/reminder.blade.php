@component('mail::message')
# Avis d'echéance de paiement de loyer

Votre paiement de loyer pour la date de {{ $date }} est en retard.
Une somme de {{ $amount }} doit être payée.

En vous remerciant,<br>
{{ $landlord }}
@endcomponent
