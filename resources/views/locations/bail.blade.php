@extends('layouts.app')

@section('content')

<div class="col-lg-10 text-justify">
    <p>
        <h2>CONTRAT DE LOCATION INITIAL D’UNE HABITATION POUR MEUBLÉE</h2>
        <h2> CONCU EN APPLICATION DE LA LOI N° 89-462 DU 6JUILLET 1989</h2>

        <h5>ENTRE LES SOUSSIGNES</h5>
        <div class="col-lg-10">
            <p> {{ $location->user->first_name }} {{ $location->user->last_name }}, résidentes 68 rue Gustave DELORY 59000 LILLE.
                Ci-après dénommé ’ le <strong>BAILLEUR</strong>‘’ D’UNE PART</p>
        </div>
        <h5> ET</h5>
        <div class="col-lg-10">
            <p>
                {{ $location->locataire->fullName() }} née le {{ $location->locataire->birth_date}} à {{ $location->locataire->place_of_birth}}, de nationalité
                {{ $location->locataire->nationality}}, résidant {{ $location->locataire->address}} – {{ $location->locataire->postalcode}} {{ $location->locataire->city}}, FRANCE, et dont le numéro de sécurité sociale
                est 2 96 07 99 256 009 78, titulaire de la pièce d'idéntité numéro {{ $location->locataire->idcard_number}}.
                Ci-après dénommés ‘’le <strong>PRENEUR</strong>‘’ D’AUTRE PART</p>
            <strong>Il a été arrêté et convenu ce qui suit :</strong>
        </div>
    </p>


    <h4>OBJET DU BAIL</h4>
    <div class="col-lg-10">
        <p>Par les présentes, {{ $location->user->first_name }} {{ $location->user->last_name }}, accorde en bail à loyer,
            conformément aux dispositions de la loi n° 89-462 du 6 juillet 1989, à {{ $location->locataire->fullName() }} soussigné de deuxième part, qui acceptent les biens dont la désignation suit :</p>
        <h5>Désignation des lieux</h5>
        <p>Un appartement au rez-de-chaussée de l’immeuble sis à {{ $location->property->city}} ({{ $location->property->postcode}}), {{ $location->property->address}},
            d’environ 20 m2, comprenant un couloir d’entrée desservant la cuisine et la chambre, une cuisine
            équipée, une chambre et une salle de bain avec WC.
            Tels que les dits lieux, conformes aux plan et descriptifs annexés aux présentent s’étendent, se
            poursuivent et comportent dans leur état actuel, sans exception ni réserve, bien connus du preneur
            qui dispense le bailleur d’en faire ici une plus ample désignation</p>
        <h5> Destination / usage</h5>
        <p>Les lieux seront exclusivement à usage d’habitation. Le preneur s’engage à se conformer à toutes
            les prescriptions ou sujétions des divers règlements régissant l’immeuble, de telle sorte que le
            bailleur ne puisse être recherché à ce sujet.
            Parties communes
            Le logement objet de la location fait partie du bâtiment situé au {{ $location->property->address}} qui fait à son
            tour partie d’un ensemble immobilier comprenant d’autres bâtiments ayant des parties et des
            services communs.</p>
    </div>

    <h4> DUREE</h4>
    <div class="col-lg-10">
        <p>
            Le présent bail est consenti et accepté pour une durée d’une année, à compter du {{ $location->date_entree}}.</p>
    </div>

    <h4>LOYER</h4>
    <div class="col-lg-10">
        <p>
            <p>Le présent bail est consenti moyennant un loyer mensuel de {{ $location->loyer}} euros que
                le PRENEUR s'oblige à payer au BAILLEUR en son domicile ou celui de son mandataire, d’avance
                (le premier de chaque mois) en monnaie ayant cours légal en France.</p>
            <h5>Mode et règlement</h5>
            Les paiements des loyers, des charges et des accessoires seront effectués par virement sur le
            compte bancaire du bailleur ou son représentant légal.
            De convention expresse, le preneur s’engage à respecter ce mode de règlement de quoi, le
            présent bail n’aurait pas été accordé par le bailleur.
        </p>
        <h5>Révision du loyer</h5>
        <p>En cas renouvellement ou prolongement de la location avec l’accord du bailleur, le loyer ci-dessus
            mentionné sera révisé automatiquement et sans préavis, tous les ans, à la date anniversaire du
            bail, en fonction de la variation de l’indice de référence des loyers, publié par l’Institut National de
            la Statistique et des Études Économiques (INSEE).
            L’indice de référence est le dernier indice connu à la date du bail, indice du deuxième trimestre
            2016, dont la valeur est égale à 105,25.
            Dans le cas où par voie législative ou réglementaire, il serait fait obligation de se référer à un autre
            indice, ce dernier serait substitué de plein droit à l’indice choisi ci-dessus.</p>
    </div>
    <h5>CHARGES</h5>
    <div class="col-lg-10">
        <p>En sus du loyer, le preneur devra rembourser au bailleur les prestations, charges et dépenses
            générales afférentes aux lieux loués sans exception ni réserves.</p>
        <h5>Détermination des charges récupérables</h5>
        <p>Le preneur supportera toutes les charges récupérables au titre des dispositions de la loi du 6 juillet
            1989, article 23 y compris :
            Eau froide : Le logement étant raccordé au compteur d’eau de la copropriété, le preneur
            remboursera au bailleur la part des frais d’abonnement, de gestion et de consommation d’eau
            attribuée au le logement, selon le mode de répartition adopté par le syndic de copropriété.
            Les frais d’administration, de gestion et entretien des parties communes : le preneur
            remboursera au bailleur, la part des frais d’éclairage, de nettoyage, d’entretien, de réparation,

            d’administration, de gestion et d’assurance des parties communes réclamé par le syndic de
            copropriété pour le logement objet de la location.
            Taxes : Les taxes d’enlèvement des ordures ménagères et de déversement à l’égout ainsi que
            tout autre impôt et taxes en vigueur et ultérieurement institués pour la partie privative ou les partie
            communes.
            La liste des charges énoncée ci-dessus n’est pas limitative.</p>
        <h5>Provision pour charges</h5>
        <p>Pour le remboursement des charges, en sus du loyer, le preneur s’engage à payer en même
            temps et d’avance, une provision pour charge fixée pour l’année en cours à {{ $location->charges}} € / mois. Ce
            montant sera révisé chaque année en fonction des prévisions nouvelles.</p>
        <h5>Régularisation</h5>
        <p>La provision sur charges fera l’objet d’une régularisation annuelle et sera justifiée par la
            communication des justificatifs des frais et dépenses antérieurs avec le mode de répartition entre
            les lots de la copropriété.
            Autre charges supporté par le locataire
            Dès l’installation dans le logement, le locataire s’engage à souscrire un abonnement pour la
            fourniture d’électricité auprès du fournisseur d’énergie de son choix et assurera le payement des
            frais d’abonnement et de consommation de ce compteur.
            Le point de livraison du compteur électrique du logement est « 07419392153463 »
            Les l’index de consommation seront relevés et reportés dans l’état d’entrée dans des lieux.</p>
    </div>
    <h5>DEPOT DE GARANTIENS</h5>
    <div class="col-lg-10">
        <p>Pour garantir l’exécution de toutes les charges, clauses et conditions du présent bail, le preneur
            versera, à l’entrée dans les lieux, au bailleur la somme de 830 € (huit cents trente euros)
            correspondant à un mois de loyer, à titre de dépôt de garantie non productif d’intérêts, ni
            actualisable. Le bailleur lui en donnera valable quittance.
            Cette somme sera conservée par le bailleur jusqu’à l’expiration du bail, elle sera restituée au
            preneur, dans les 2 mois suivant la date de restitution des lieux, sous réserve de la complète
            exécution par lui de ses obligations au titre du présent bail et du règlement de toutes sommes qu’il
            pourrait devoir au bailleur à sa sortie ou dont le bailleur pourrait être responsable du fait du
            preneur à un titre quelconque.
            Cette somme ne pourra en aucun cas être déduite du dernier terme de loyer qui sera réglé
            d’avance et intégralement comme les précédents.
            Dans le cas de résiliation du présent bail, par suite d’inexécution d’une des conditions ou pour une
            cause imputable au preneur, le dépôt de garantie restera acquis au bailleur à titre de premiers
            dommages et intérêts sans préjudice de tous autres.</p>
    </div>
    <h5>CONGE</h5>
    <div class="col-lg-10">
        <p>En raison de travaux de réhabilitation envisagée par le bailleur dans le logement, par dérogation,
            le présent bail ne peut être renouvelé.</p>
        <h5>Congé émanant du bailleur</h5>
        <p>Le BAILLEUR peut mettre fin à la relation contractuelle au terme du bail ou à l’expiration de
            chacune de ses périodes de renouvellement. Le délai de préavis applicable est de six mois.
            Le preneur est redevable du loyer et des charges pour le temps ou il a occupé réellement les lieux</p>
        <h5>Congé émanant du preneur</h5>
        <p>Le PRENEUR peut mettre fin à la relation contractuelle à tout moment. Le délai de préavis
            applicable est de trois mois.
            Sauf accord avec le bailleur, le preneur est redevable du loyer et des charges concernant tout
            délai de préavis.</p>
    </div>

    <h5>RENOUVELEMENT</h5>
    <div class="col-lg-10">
        <p>En raison de travaux de réhabilitation envisagée par le bailleur dans le logement, par dérogation,
            le présent bail ne peut être ni renouvelé ni prolongé ni reconduit.</p>
    </div>
    <h5>SIGNIFICATION</h5>
    <div class="col-lg-10">
        <p>Le congé doit être signifiés par lettre recommandée avec avis de réception ou par exploit
            d’huissier.
            Le délai du préavis cours à compter de la date de réception de la lettre recommandée ou de la
            date de signification de l’acte d’huissier.</p>
    </div>
    <h5>ETAT DES LIEUX</h5>
    <div class="col-lg-10">
        <p>En application de l’article 3 de la loi du 6 juillet 1989, un état des lieux est établi, à l’entrée dans les
            lieux, d’un commun accord du preneur et du bailleur. Un exemplaire de cet état restera annexé au
            présent bail.
            Outre cet état des lieux, le preneur reconnaît que les locaux ont été entièrement rénovés et qu’il
            les a reçus en très bon état général.
            Le preneur devra rendre les lieux loués dans un état aussi bon que l’état constaté à son entrée. A
            défaut, il réglera au bailleur le coût des travaux nécessaires pour leur remise à neuf. A cet effet, il
            sera procédé au plus tard le jour de l’expiration du bail ou en fin de jouissance, en la présence du
            preneur dûment convoqué, à l’état des lieux à la suite duquel le preneur devra remettre les clés au
            bailleur.
            Cet état des lieux comportera le relevé des réparations à effectuer incombant au preneur.</p>

        </p>
    </div>

    <h5>CHARGES ET CONDITIONS</h5>
    <div class="col-lg-10">
        <p>Le présent bail est consenti et accepté aux charges, clauses et conditions suivantes, que le
            preneur s’engage à suivre et exécuter fidèlement sous peine de tous dépens, dommages et
            intérêts.</p>
        <h5>Entretien et réparations</h5>
        <p>Le preneur prendra les lieux loués dans l’état où ils se trouvent le jour de l’entrée en jouissance,
            les reconnaissant en bon état d’entretien et de réparation, ainsi que les équipements divers en bon
            état de fonctionnement. Il ne peut exiger du bailleur aucune réparation ni remise en état.
            Le preneur tiendra les lieux loués de façon constante en parfait état de réparations locatives. Il
            supportera les frais de tous travaux intérieurs, y compris le renouvellement des peintures et des
            tapisseries, le remplacement des vitres, des quincailleries, le bailleur n’étant tenu que des grosses
            réparations prévues à l’article 606 du code civil.
            Le preneur devra entretenir en parfait état de fonctionnement et de remplacement de pièces
            pendant toute la durée de la location, tous les équipements et les installations : électriques,
            sanitaires, portes, fenêtres, volets…
            L’intervention du bailleur ne pouvant être sollicitée à ce sujet ni pour une réparation, ni pour un
            remplacement sauf pour cause de vétusté.
            Le preneur, à sa sortie, rendra les lieux loués en bon état d’entretien, de propreté et conformes à
            l’état des lieux dressé à son entrée.
            Lors de son départ, le preneur ne pourra réclamer, aucune reprise, justifiée ou non, pour les
            peintures, tapisseries, objets mobiliers ou immobiliers, installations électriques ou autres.</p>
        <h5>Travaux- Amélioration -Embellissements</h5>
        <p>Le preneur ne pourra faire dans les lieux loués aucun changement de distribution, percements de
            murs et cloisons ou planchers, aucune démolition, transformation, sans le consentement exprès et
            par écrit du bailleur.
            Tous embellissements, améliorations et décors autorisés qui seraient faits par le preneur dans les
            lieux loués pendant le cours du bail devront être exécutés sous le contrôle du bailleur ou de son
            architecte dont les honoraires resteront à la charge du preneur. Tous embellissements et améliorations resteront à l’expiration du bail, propriété du bailleur sans
            aucune indemnité, à moins que celui-ci ne préfère la remise des lieux dans leur état primitif.
            Le preneur souffrira que le bailleur fasse à l’immeuble dont dépendent les locaux loués pendant le
            cours du bail, tous travaux de réparation, reconstruction, surélévation, agrandissement et autres
            quelconques qu’il jugerait nécessaires sans pouvoir prétendre à aucune indemnité ni diminution de
            loyer, quelles qu’en soient l’importance et la durée, par dérogation à l’article 1724 du Code Civil,
            alors même que cette dernière excéderait quarante (40) jours.
            Le preneur ne pourra en aucun cas s’opposer à l’installation de nouvelles canalisations ou câbles
            traversant ses locaux. Il ne peut également pas s’opposer au changement.
            Le preneur devra également supporter, de la même manière, les travaux qui seraient exécutés sur
            la voie publique ou dans les immeubles voisins de celui dont fait partie les lieux loués alors même
            qu’il en résulterait une gêne et sauf recours contre l’administration, l’entrepreneur des travaux ou le
            propriétaire voisin s’il y a lieu.
            S’il est à même d’en contester la nécessité, le preneur devra aviser le bailleur de toute réparation
            rendue nécessaire par toute dégradation quand bien même il n’en résulterait aucun dégât
            apparent à sa charge. Il sera rendu responsable de toute aggravation directe ou indirecte résultant
            de son silence ou de son retard, notamment pour la déclaration aux assureurs.
            Il devra à ses frais et sans délai, déplacer son mobilier et déposer coffrages et décoration ainsi que
            toutes installations qu’il aurait faites et dont l’enlèvement serait utile pour la recherche et la
            réparation des fuites de toute nature, des fissures, et en général, pour l’exécution de tous travaux.
            De permettre à cet effet l’accès des lieux au bailleur, au Syndic ou à leurs représentants, aux
            entrepreneurs, aux ouvriers, aux architectes, etc.…
            Le preneur, reste dans tous les cas, responsable des gros travaux qui deviendraient nécessaires
            par suite d’un défaut d’entretien incombant aux locataires.</p>
        <h5>Assurances</h5>
        <p>Le preneur fera assurer les locaux loués et son mobilier contre les risques d’incendie, explosion,
            foudre, ouragan, tempête et extension, y compris émeutes et dégâts des eaux, vol et bris de glace,
            y compris détérioration à la suite de vol ainsi que le recours à des voisins et des tiers, pour des
            capitaux suffisants auprès des compagnies notoirement solvables, et de prouver du paiement
            régulier des primes et de la suffisance des capitaux assurés, à la première demande du bailleur ou
            de son mandataire.
            Le preneur sera tenu de continuer l’assurance pendant toute la durée de son occupation, et de la
            justifier chaque année.
            Le preneur devra déclarer immédiatement à sa compagnie d’assurance et en informer
            conjointement le bailleur ou son mandataire, tout sinistre ou dégradation s’étant produit dans les
            lieux loués, quand bien même il n’en résulterait aucun dégât apparent, et sous peine d’être tenu
            personnellement de rembourser au bailleur le montant du préjudice direct ou indirect résultant pour
            celui-ci de ce sinistre, et d’être notamment responsable vis à vis de lui du défaut de déclaration en
            temps utile dudit sinistre.
            Le preneur déclare renoncer à tout recours contre le bailleur, en cas de vol, cambriolage ou tout
            autre acte délictueux ou criminel commis dans les lieux loués ou les parties communes de
            l’immeuble.
            Le preneur devra assurer à tout moment l’accès des lieux loués afin d’éviter tous risques
            d’incendie, d’inondation ou autre, provenant de son logement notamment en cas d’absence
            prolongée ou de périodes de vacances, d’indiquer au bailleur ou à son mandataire, le nom et
            l’adresse de la personne qui détient les clefs.
            Les polices d’assurances du preneur devront prévoir que leur résiliation ne pourra produire effet
            que 15 jours après la notification par ses assureurs au bailleur.</p>
        <h5>Equipements</h5>
        <p>Le preneur s’engage à :
            - effectuer l'entretien régulier des équipements et veiller à leur bon fonctionnement.
            - prévenir le bailleur de la moindre dégradation ou anomalie de fonctionnement, De permettre
            à cet effet l'accès des lieux au bailleur, à ses agents ou aux entreprises chargée de la
            vérification et de l'entretien, sous peine d'être tenu personnellement responsable de toutes
            les réparations ultérieures.
            - rembourser au bailleur, à première demande, les frais de réparation et d'entretien des
            équipements.</p>

        <h5>Règlement d’immeuble collectif</h5>

        <p>Le preneur devra se conformer strictement au règlement intérieur de l’immeuble, notamment en ce
            qui concerne : la propreté, l’approvisionnement, le nettoyage des parties communes qui doivent
            rester constamment libres de toute occupation.
            S’abstenir de tout ce qui pourra nuire, par son fait ou par le fait de ses visiteurs, au bon ordre de
            l’immeuble et à la tranquillité de ses occupants.
            N’exposer aux fenêtres et aux murs de l’immeuble, en dehors de la devanture, ni caisses et pots
            de fleurs, ni aucun objet de quelque nature qu’il soit.
            Le preneur reconnaît avoir pris connaissance des consignes de sécurité et du plan d’évacuation
            de l’immeuble en cas d’incendie ; il dégage la responsabilité du bailleur, de son mandataire et du
            syndic de l’immeuble à ce sujet.
            N’installer aucune enseigne, affiche, store, antenne de télévision ou de radio sans l’accord
            préalable du bailleur qui pourra imposer un modèle de son choix.
            N’avoir aucun animal.
            Ne faire ou laisser faire dans les lieux loués aucune vente publique, dans quelque cas que ce soit.
            De ne pouvoir réclamer aucune indemnité ni diminution de loyer en cas d’arrêt provisoire des
            services communs de l’immeuble dont dépendent les lieux loués. Le bailleur n’engage en aucun
            cas sa responsabilité à ce sujet et ne pouvant être l’objet d’aucun recours.
            La responsabilité du bailleur ne pourra en aucun cas être engagée dans le cas de consommation
            anormale d’eau par suite de fuites ou toute autre cause ; le preneur s’engageant à ce sujet à
            indiquer toutes les anomalies dès qu’il les constatera.</p>
    </div>
    <h5>DROIT DE VISITE</h5>
    <div class="col-lg-10">
        <p>Le preneur devra donner accès, dans les lieux loués, au bailleur, à son représentant, à son
            architecte ou à ses entrepreneurs et ouvriers aussi souvent qu’il sera nécessaire pour s’assurer du
            bon état des lieux et du respect de toutes les clauses et conditions du bail, prendre toute mesure
            conservatoire, réaliser tous travaux, les faire visiter en vue de leur location ou de leur vente.
            Lorsqu’un congé aura été délivré dans les délais prescrits ou en cas de mise en vente des lieux
            loués, le bailleur aura droit de mettre aux nombres, emplacements, dimensions de son choix, tous
            panneaux, enseignes écrites, destinés à publier la mise en vente ou en location des locaux, et le
            preneur sera tenu de laisser visiter les lieux loués pendant les jours et heures ouvrables, sous
            peine de dommages et intérêts.</p>
    </div>
    <h5>DEPART DU LOCATAIRE</h5>
    <div class="col-lg-10">
        <p>Un mois avant son déménagement, le preneur devra justifier de l’acquis intégral de ses
            contributions personnelles, taxe d’habitation et tout autre impôt dont le bailleur pourrait être tenu
            responsable aux termes de lois et décrets ; le preneur devra le cas échéant verser au bailleur une
            provision sur la part des charges dont il resterait redevable au jour de son départ.
            Le preneur devra obligatoirement, lors de son départ, faire connaître son nouveau domicile et en
            justifier. Il devra également justifier au bailleur de la connaissance par le percepteur de son
            déménagement et de sa nouvelle adresse, et ce afin qu’aucun recours ne puisse être exercé
            contre le propriétaire concernant le règlement de sa taxe d’habitation de l’année du départ.</p>
    </div>
    <h5>CONDITIONS DIVERSES</h5>
    <div class="col-lg-10">
        <p>Le preneur devra tenir les lieux loués garnis de meubles, objets mobiliers, matériels et
            marchandises lui appartenant personnellement en qualité et en valeur suffisantes pour répondre
            au paiement des loyers.
            Le preneur devra satisfaire à toutes charges de ville et de police dont les locataires sont
            ordinairement tenus. Il devra acquitter exactement toutes les taxes et contributions personnelles,
            professionnelles ou autres à la charge des locataires, de manière que le bailleur ne puisse jamais
            être inquiété ou recherché à cet égard pour quoi que ce soit.
            De notifier au bailleur ou à son mandataire, dans le mois de l’événement, tout changement d’état
            civil ou de situation professionnelle pouvant survenir au cours du présent bail ou de son
            renouvellement, et d’en justifier.
            Le preneur devra faire son affaire personnelle du gardiennage et de la surveillance des locaux
            loués.
            Le prix du loyer au présent bail a été fixé et établi compte tenu des charges et conditions stipulées
            et mise à la charge du preneur. Si des lois nouvelles ou décrets venaient à modifier ou à interdire
            la mise à la charge des locataires de tout ou partie des charges et conditions de ce bail et à les
            mettre exclusivement à la charge des propriétaires, le preneur consent dès maintenant à ce que le
            loyer soit automatiquement majoré de la valeur annuelle représentée par ces charges et conditions
            au jour de l’application de ces lois et décrets.
            Le preneur ne pourra céder, sous quelque forme que ce soit, ses droits au présent bail.
            Toute sous-location, même temporaire ou partielle, ou simple occupation des lieux par un tiers, à
            quelque titre que ce soit (hébergement gratuit, domiciliation, etc.…) est interdite.</p>
    </div>
    <h5>CLAUSE RESOLUTOIRE</h5>
    <div class="col-lg-10">
        <p>A défaut de paiement intégral, à son échéance exacte, d’un seul terme de loyer, d’un rappel sur
            augmentation de loyer, des charges et accessoires, des frais de lettres recommandées, de
            commandement, de sommation, de procédure, ou a défaut de justifier de l’assurance des lieux ou
            d’inexécution de l’une ou l’autre des conditions du présent bail et deux mois après simple
            commandement de payer, d’une sommation ou mise en demeure d’exécution restée sans effet, et
            contenant déclaration par le bailleur ou ses ayants droit de son intention d’user du bénéfice de la
            présente clause, le présent bail sera résilié de plein droit si bon semble au bailleur et l’expulsion du
            preneur ainsi que tous les occupants des lieux loués pourra voir lieu sur simple ordonnance de
            référé, sans qu’il soit besoin de remplir aucune autre formalité et nonobstant toutes offres
            ultérieures de payer ou d’exécuter.
            Dans ce cas, les loyers versés d’avance resteraient acquis au bailleur à titre d’indemnité sans
            préjudice de son droit au paiement des loyers courus ou à courir y compris le terme commencé au
            moment de la sortie des lieux, du prix des réparations locatives et sous réserve de tous autres
            droits et actions.
            Les frais d’huissier, de justice, actes de procédure, droit proportionnel ainsi que tout frais extra
            judiciaires, honoraires d’avocats, qui seraient à l’encontre du preneur, seront considérés comme
            supplément et accessoires du loyer. Ils devront en conséquence être acquittés en même temps
            que les sommes dues au titre du présent bail.
            En cas de paiement par chèque, la somme ne pourra être considérée comme réglée qu’après son
            encaissement, nonobstant la remise de la quittance. La clause résolutoire du bail restera acquise
            au bailleur dans le cas où le chèque ne serait pas provisionné.</p>
    </div>
    <h5>CLAUSE PENALE</h5>
    <div class="col-lg-10">
        <p>
            En cas de non-paiement de toute somme due à son échéance, et dès le premier acte d’huissier, le
            preneur devra de plein droit payer en sus, outre les frais de recouvrement et y compris la totalité
            du droit proportionnel dû à l’Huissier, 10% de la somme due, pour couvrir le bailleur tant des
            dommages pouvant résulter du retard dans le paiement, que des frais, diligences et honoraires
            exposés pour le recouvrement de cette somme, sans préjudice de l’application de l’article 700 du
            nouveau Code de Procédure Civile.
            Afin de garantir au bailleur la récupération effective et immédiate des lieux loués, le preneur, dans
            le cas où il se maintiendrait indûment dans les lieux à la cessation de la location, versera une
            indemnité par jour de retard, égale à deux fois le loyer quotidien.
            Sera considéré comme jour de retard, toute journée d’occupation du lendemain de la cessation de
            la location, jusqu’au jour de la remise des clefs, après déménagement complet.
            Toute journée commencée étant intégralement due.
        </p>
    </div>
    <h5>TOLERANCES</h5>
    <div class="col-lg-10">
        <p>Il est formellement convenu que toutes les tolérances de la part du bailleur relatives aux clauses et
            conditions du présent bail, qu’elles qu’en aient pu être la fréquence et la durée, ne pourront en
            aucun cas être considérées comme apportant une modification ou suppression à ces conditions ni
            génératrices d’un droit quelconque. Le bailleur pourra toujours y mettre fin.</p>
    </div>
    <h5>SOLIDARITE ET INDIVISIBILITE</h5>
    <div class="col-lg-10">

        <p>En cas de décès du preneur pendant le cours du bail, il y aura solidarité et indivisibilité entre tous
            les héritiers et représentants pour le paiement du loyer, des charges et accessoires et l’entière
            exécution des conditions du bail. En outre, les héritiers et représentants supporteront seuls les
            frais de signification à leur faire en vertu de l’article 937 du Code Civil.</p>
    </div>
    <h5>FRAIS</h5>
    <div class="col-lg-10">
        <p>Tous les frais des présentes seront supportés et acquittés par le preneur qui s’y oblige.</p>
    </div>
    <h5>ATTRIBUTION DE JURIDICTION</h5>
    <div class="col-lg-10">
        <p>Les parties attribuent exclusivement compétence, pour tous litiges concernant ce bail ou ses
            conséquences, au Tribunal du lieu de situation du logement.
        </p>
    </div>
    <p>Fait à {{ $location->property->city}}, le {{ $location->date_signature_bail}}</p>

    <p> Signatures : </p>
    <div class="col-lg-4">
        <p> {{ $location->user->first_name }} {{ $location->user->last_name }} </p>
    </div>
    <div class="col-lg-4">
        <p> {{ $location->locataire->fullName() }} </p>
    </div>
</div>
</div>
@endsection