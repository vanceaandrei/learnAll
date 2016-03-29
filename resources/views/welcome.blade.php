@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Welcome to LearnAll platform. In order to continue please 
                    <a href=" {{ url('/login') }}"> Login </a>
                    or 
                    <a href=" {{ url('/register') }}">
                        Create a new Account
                    </a>!
                </div>

                <div class="panel-body">

                    <h2> Description </h2>
                    <p style="text-indent: 2em;"> Inițial, începând cu anul 1500, textul Lorem Ipsum era utilizat numai în tipografii, de către culegători. În prezent, datorită apariției și utilizării globale a computerelor, textul Lorem ipsum este utilizat pentru a simula orice text cu aspect neutru, atât pentru lucrări tipografice cât și pentru orice alte lucrări care presupun text - în web design, design pentru logo-uri corporative, ștampile etc.

                        Deși în aparență textul Lorem ipsum pare a fi lipsit de sens, fragmentul original este mai vechi de 2000 de ani și se regăsește în lucrarea lui Cicero De Finibus Bonorum et Malorum, care datează din anul 45 îC. Descoperirea originii îndepărtate a acestui text îi este datorată lui Richard McClintock, profesor de limba latină la colegiul Hampden-Sydney din Virginia, Statele Unite ale Americii, care a căutat unul dintre cuvintele rare regăsite în lipsum - consectetur - găsindu-l, alături de pasajul integral, în lucrarea lui Cicero. Astfel, "lorem ipsum" este de fapt o versiune trunchiată pentru dolorem ipsum.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
