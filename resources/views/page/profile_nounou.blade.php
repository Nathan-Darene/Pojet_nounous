<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

    <title>Profile de {{ $data['username'] }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/profil_nounou.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/texterea.css') }}">
    <style>
        #annonce {
            display: none;
        }
    </style>
</head>

<body>
    <audio id="lecteur-audio" src="{{asset('sound/relaxed-vlog-night-street-131746.mp3')}}" type="audio/mp3" loop></audio>
    <div class="header__wrapper">
        <header></header>
        <!--form action="" method="post"-->
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    @if ($data ?? '')
                        <img src="uploads/{{ $data['imageUpload'] }}" alt="{{ $data['username'] }}" />
                    @endif
                    <span></span>
                </div>
                @if ($data ?? '')
                    <h2>{{ $data['username'] }}</h2>
                    <p>{{ $data['firstname'] }} {{ $data['lastname'] }}</p>
                    <p>{{ $data['phone'] }}</p>
                    <p>{{ $data['city'] }}</p>
                    <p>{{ $data['postalcode'] }}</p>
                    <p>{{ $data['email'] }}</p>
                    <p>{{ $data['Fonction'] }}</p>
                @endif

                <ul class="about">
                    <li><span>4,073</span>Followers</li>
                    <li><span>322</span>Following</li>
                    <li><span>200,543</span>Attraction</li>
                </ul>

                <div class="content">
                    @if ($data ?? '')
                        <h2>Recherche Enfant à garder . {{ $data['role'] }} dévouée</h2>
                        <p>
                            Je m’appelle <strong>{{ $data['firstname'] }}</strong> , j’ai <strong>{{ $data['Age'] }}
                            </strong> ans, je suis {{ $data['role'] }}, étudiante en licence
                            Langues Étrangères Appliquées, à L’université Lyon 2 résident a
                            <strong>{{ $data['city'] }}</strong>.
                            Je recherche un job étudiant pour le permettre de faire
                            un peu d’économies étant loin de mes parants, notamment dans la garde d’enfants .
                            Je suis issu d’une famille de 7 frères et sœurs .
                        </p>
                    @endif
                    <ul>
                        <li><i class="fab fa-twitter"></i></li>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-dribbble"></i>
                    </ul>
                </div>
            </div>
            <div class="right__col">
                <nav>
                    <ul>
                        <li><i class="fa-solid fa-user"></i><a href="#">Profil</a></li>
                        <li><a href="#annonce" class="a">>Annonce</a></li>
                        <li><a href="#service" class="a">>Annonce parents</a></li>
                        <li><a href="{{ route('About') }}" class="a">>about</a></li>
                    </ul>
                    <button>Editer</button>
                </nav>
                <div class="affichage">
                <form action="{{ route('annonce') }}" method="POST">
                    @csrf

                    <div class="annonce wrapper" id="annonce">
                        <h2>Annonce</h2>
                        <p>Ajouter une annnce</p>
                        <input type="text" placeholder="Titre de l'annonce" name="titre" id="titre"
                            class="annonce1">
                        <textarea name="description" spellcheck="false" placeholder="Description de l'annonce"></textarea>
                        <div class="event">
                            <select name="statut" id="statut">
                                <option value="">Votre disponibilité</option>
                                <option value=""></option>
                                <option value="Disponible">Disponible</option>
                                <option value="Indisponible">Indisponible</option>
                            </select>
                            <input type="text" name="date_disponible" id="date_disponible"
                                placeholder="Date de disponibilité">
                        </div>
                        <div class="form-group">
                            <div class="containe">
                                <input style="display: none;" id="cbx" type="checkbox" id="active"
                                    name="active" value="1">
                                <label class="check" for="cbx">Véhiculé ?:
                                    <svg viewBox="0 0 18 18" height="18px" width="18px">
                                        <path
                                            d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z">
                                        </path>
                                        <polyline points="1 9 7 14 15 4"></polyline>
                                    </svg>
                                </label>
                            </div>
                            <!--input type="checkbox" id="active" name="active" value="1"-->
                        </div>
                        <button type="submit" class="btns">Ajouter</button>
                    </div>


                </form>
            </div>
                <div class="service" id="service">

                </div>
            </div>
        </div>
        <!--/form-->
    </div>
    <script>
        const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e => {
            textarea.style.height = "63px";

            let scHeight = e.target.scrollHeight;
            textarea.style.height = `${scHeight}px`;
        });
    </script>
    <script src="{{ asset('js/music.js') }}"></script>
    <script src="{{ asset('js/annonce.js') }}"></script>

</body>

</html>
