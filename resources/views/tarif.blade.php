@extends('template')

@section('contenu')
<div class="container">
    <h2>Nos tarifs</h2>
    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore veritatis doloribus officiis et sequi
        corporis laudantium itaque molestias tempora in ea, consequuntur quisquam consectetur debitis, dignissimos fuga
        saepe beatae alias?</span>

    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card tarif">
                <img class="card-img-top"
                    src="{{ asset('images/homePage/IMG_0623.JPG') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Grossesse</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">170 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card tarif">
                <img class="card-img-top"
                    src="{{ asset('images/homePage/IMG_8224a.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Famille</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to </p>
                    <div class="bottom">
                        <li class="list-group-item text-center border-success">150 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="card tarif">
                <img class="card-img-top"
                    src="{{ asset('images/homePage/IMG_9101.jpg') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nouveau né</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">180 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="card tarif">
                <img class="card-img-top"
                    src="{{ asset('images/homePage/IMG_3852.JPG') }}"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Bébé & Enfant</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">170 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </div>
    <h1>Produits</h1>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="card tarif">
                <img class="card-img-top"
                    src="https://images.squarespace-cdn.com/content/v1/56bb820b2eeb811c3b94e893/1459530679858-0CLLB5I0BRC1HVZFAW2J/ke17ZwdGBToddI8pDm48kCc0T8A4BZrHnHqcqSpPTnF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iXS6XmVv7bUJ418E8Yoc1hx9cp17Zmc6GVYdAkBUIFEbOwubZPnXjjxH5uEWz9c3g/albums_march0019edit.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Album photos</h5>
                    <p class="card-text">- couverture en lin</br>- semi-cuir 21 X 29
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">à partir de 130 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="card tarif">
                <img class="card-img-top"
                    src="https://images.squarespace-cdn.com/content/v1/56bb820b2eeb811c3b94e893/1459530679858-0CLLB5I0BRC1HVZFAW2J/ke17ZwdGBToddI8pDm48kCc0T8A4BZrHnHqcqSpPTnF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iXS6XmVv7bUJ418E8Yoc1hx9cp17Zmc6GVYdAkBUIFEbOwubZPnXjjxH5uEWz9c3g/albums_march0019edit.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Photos sur toile premium</h5>
                    <p class="card-text">- 30 X 20<br>- chassis en bois de 4 cm d'épaisseur<br>- imperméable à l'eau
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">45 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="card tarif">
                <img class="card-img-top"
                    src="https://images.squarespace-cdn.com/content/v1/56bb820b2eeb811c3b94e893/1459530679858-0CLLB5I0BRC1HVZFAW2J/ke17ZwdGBToddI8pDm48kCc0T8A4BZrHnHqcqSpPTnF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iXS6XmVv7bUJ418E8Yoc1hx9cp17Zmc6GVYdAkBUIFEbOwubZPnXjjxH5uEWz9c3g/albums_march0019edit.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Tirages photos</h5>
                    <p class="card-text">- 20 X 30 cm = 10€</br>- 30 X 40 = 15€</br>- 13 X 19 = 1,50€</br>- 10 X 15 = 1€
                    </p>
                    <div class="bottom ">
                        <li class="list-group-item text-center border-success">à partir de 1 €</li>
                        <div class="col text-center">
                            <br>
                            <a href="{{action('MyController@contact')}}" class="btn btn-light ">Réservez votre
                                séance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

</div>

<script>
    $(document).ready(function () {

        $(".card").hover(
            function () {
                $(this).addClass('shadow-lg').css('cursor', 'pointer');
            },
            function () {
                $(this).removeClass('shadow-lg');
            }
        );
    });

</script>

@endsection
