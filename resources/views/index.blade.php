@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <section class="home">
        <div class="wrapper-home">
            <div class="box-title">
                <h1 class="title-principal">
                    Le lien entre la diaspora l’Afrique.
                    Être un partennaire privilegié dans le processus de l’inclusion financière
                </h1>
                <div id="div-form">
                    <form class="container-form" id="container-form" action="https://formspree.io/infos@quickcashci.com" method="POST">
                        <div class="title-form">
                            <h2 class="contact-form">Contact us</h2>
                            <button id="close-form" value="reset" type="reset">-</button>
                        </div>
                        <div class="div-box-form">
                            <div class="box-form-contact">
                                <label class="box-form">Name
                                </label>
                                <input type="name" class="input-form" name="Name">
                            </div>
                            <div class="box-form-contact">
                                <label class="box-form">E-mail
                                </label>
                                <input type="email" class="input-form" name="E-mail">
                            </div>
                            <div class="box-form-contact">
                                <label class="box-form">How can we help you?</label>
                                <textarea type="textarea" class="textarea-form-2" name="How can we help you?"></textarea>
                            </div>
                        </div>
                        <div class="div-button-cancel-send">
                            <button class="button-cancel" id="button-cancel" value="reset" type="reset">Cancel</button>
                            <button class="button-send " type="submit ">Send</button>
                        </div>
                    </form>
                </div>


                <div class="div-button ">
                    <button class="button-contact " id="btnForm "><img class="button-contact-img " src="{{ asset("img/contact.svg") }}">
                        <p class="button-description ">Contacts</p>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="container-products">
        <div class="wrapper-content ">
            <div id="OurProducts " class="container-title-cash ">
                <h2 class="title-ourproducts ">
                    Nos offres
                </h2>
            </div>
            <div class="container-box-cash ">
                <div class="box-cash ">
                    <h2 class="title-cash " data-translatable>Cash à Cash</h2>
                    <img class="img-cash " src="{{ asset("img/cash.png") }}" alt=" ">
                    <p class="p-cash ">Retrait d’argent dans l’un des points Timbuctu Exchange</p>
                </div>
                <div class="box-cash border ">
                    <h2 class="title-cash ">Cash to Card</h2>
                    <img class="img-cash " src="{{ asset("img/account.png") }}" alt=" ">
                    <p class="p-cash ">Transfer of money from an individual onto a card</p>
                </div>
                <div class="box-cash ">
                    <h2 class="title-cash ">Cash à Compte</h2>
                    <img class="img-cash " src="{{ asset("img/account.png") }}" alt=" ">
                    <p class="p-cash ">
                        Conçu pour les migrants, Il permet de transférer de l'argent directement sur un compte bancaire d'origine, à partir du réseau Timbuctu Echange </p>
                </div>

                <div class="box-cash border ">
                    <h2 class="title-cash ">Cash à Wallet</h2>
                    <img class="img-cash" src="{{ asset("img/account.png") }}" alt=" ">
                    <p class="p-cash ">Dépôt d’argent sur compte mobile money</p>
                </div>
                <div class="box-cash ">
                    <h2 class="title-cash ">Cash Delivery</h2>
                    <img class="img-cash" src="{{ asset("img/account.png") }}" alt=" ">
                    <p class="p-cash ">
                        Paiement de transfert à domicile
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="simulater">
        <div class="wrapper-simulater ">
            <form action=" " class="container-simulater ">
                <div class="container-select ">
                    <fieldset class="box-simulater ">
                        <label class="label-simulater ">De:</label>
                        <div class="scrollable ">
                            <select class="select-simulater "
                                    id="fxexchangerateFrom "
                                    name="from "
                                    onchange="getCurrencys(event) "
                            >
                                <option value="XOF ">Ivory Coast</option>
                                <option value="XOF ">Burkina Faso</option>
                                <option value="XOF ">Mali</option>
                                <option value="NGN ">Niger</option>
                                <option value="USD " selected="selected ">Togo</option>
                                <option value="EUR ">France</option>
                                <option value="USD ">United States Dollar</option>
                                <option value="EUR ">Euro</option>
                                <option value="GBP ">British Pound</option>
                                <option value="JPY ">Japanese Yen</option>
                                <option value="CHF ">Swiss Franc</option>
                                <option value="CAD ">Canadian Dollar</option>
                                <option value="AUD ">Australian Dollar</option>
                                <option value="CNY ">Chinese Yuan</option>
                                <option value="HKD ">Hong Kong Dollar</option>
                                <option value="RUB ">Russian Rouble</option>
                                <option value="MXN ">Mexican Peso</option>
                                <option value="ZAR ">South African Rand</option>
                                <option disabled="disabled ">-----------------------------</option>
                                <option value="ALL ">Albanian Lek</option>
                                <option value="DZD ">Algerian Dinar</option>
                                <option value="ARS ">Argentine Peso</option>
                                <option value="AWG ">Aruba Florin</option>
                                <option value="BSD ">Bahamian Dollar</option>
                                <option value="BHD ">Bahraini Dinar</option>
                                <option value="BDT ">Bangladesh Taka</option>
                                <option value="BBD ">Barbados Dollar</option>
                                <option value="BYR ">Belarus Ruble</option>
                                <option value="BZD ">Belize Dollar</option>
                                <option value="BMD ">Bermuda Dollar</option>
                                <option value="BTN ">Bhutan Ngultrum</option>
                                <option value="BOB ">Bolivian Boliviano</option>
                                <option value="BWP ">Botswana Pula</option>
                                <option value="BRL ">Brazilian Real</option>
                                <option value="BND ">Brunei Dollar</option>
                                <option value="BGN ">Bulgarian Lev</option>
                                <option value="BIF ">Burundi Franc</option>
                                <option value="KHR ">Cambodia Riel</option>
                                <option value="CVE ">Cape Verde Escudo</option>
                                <option value="KYD ">Cayman Islands Dollar</option>
                                <option value="XOF ">CFA Franc (BCEAO)</option>
                                <option value="XAF ">CFA Franc (BEAC)</option>
                                <option value="CLP ">Chilean Peso</option>
                                <option value="COP ">Colombian Peso</option>
                                <option value="KMF ">Comoros Franc</option>
                                <option value="CRC ">Costa Rica Colon</option>
                                <option value="HRK ">Croatian Kuna</option>
                                <option value="CUP ">Cuban Peso</option>
                                <option value="CZK ">Czech Koruna</option>
                                <option value="DKK ">Danish Krone</option>
                                <option value="DJF ">Djibouti Franc</option>
                                <option value="DOP ">Dominican Peso</option>
                                <option value="XCD ">East Caribbean Dollar</option>
                                <option value="EGP ">Egyptian Pound</option>
                                <option value="SVC ">El Salvador Colon</option>
                                <option value="EEK ">Estonian Kroon</option>
                                <option value="ETB ">Ethiopian Birr</option>
                                <option value="FKP ">Falkland Islands Pound</option>
                                <option value="FJD ">Fiji Dollar</option>
                                <option value="IDR ">Indonesian Rupiah</option>
                                <option value="INR ">Indian Rupee</option>
                                <option value="GMD ">Gambian Dalasi</option>
                                <option value="GTQ ">Guatemala Quetzal</option>
                                <option value="GNF ">Guinea Franc</option>
                                <option value="GYD ">Guyana Dollar</option>
                                <option value="HTG ">Haiti Gourde</option>
                                <option value="HNL ">Honduras Lempira</option>
                                <option value="HUF ">Hungarian Forint</option>
                                <option value="ISK ">Iceland Krona</option>
                                <option value="IRR ">Iran Rial</option>
                                <option value="IQD ">Iraqi Dinar</option>
                                <option value="ILS ">Israeli Shekel</option>
                                <option value="JMD ">Jamaican Dollar</option>
                                <option value="JOD ">Jordanian Dinar</option>
                                <option value="KZT ">Kazakhstan Tenge</option>
                                <option value="KES ">Kenyan Shilling</option>
                                <option value="KRW ">Korean Won</option>
                                <option value="KWD ">Kuwaiti Dinar</option>
                                <option value="LAK ">Lao Kip</option>
                                <option value="LVL ">Latvian Lat</option>
                                <option value="LBP ">Lebanese Pound</option>
                                <option value="LSL ">Lesotho Loti</option>
                                <option value="LRD ">Liberian Dollar</option>
                                <option value="LYD ">Libyan Dinar</option>
                                <option value="LTL ">Lithuanian Lita</option>
                                <option value="MOP ">Macau Pataca</option>
                                <option value="MKD ">Macedonian Denar</option>
                                <option value="MWK ">Malawi Kwacha</option>
                                <option value="MYR ">Malaysian Ringgit</option>
                                <option value="MVR ">Maldives Rufiyaa</option>
                                <option value="MRO ">Mauritania Ougulya</option>
                                <option value="MUR ">Mauritius Rupee</option>
                                <option value="MDL ">Moldovan Leu</option>
                                <option value="MNT ">Mongolian Tugrik</option>
                                <option value="MAD ">Moroccan Dirham</option>
                                <option value="MMK ">Myanmar Kyat</option>
                                <option value="NAD ">Namibian Dollar</option>
                                <option value="NPR ">Nepalese Rupee</option>
                                <option value="ANG ">Neth Antilles Guilder</option>
                                <option value="NZD ">New Zealand Dollar</option>
                                <option value="NIO ">Nicaragua Cordoba</option>
                                <option value="NGN ">Nigerian Naira</option>
                                <option value="KPW ">North Korean Won</option>
                                <option value="NOK ">Norwegian Krone</option>
                                <option value="OMR ">Omani Rial</option>
                                <option value="XPF ">Pacific Franc</option>
                                <option value="PKR ">Pakistani Rupee</option>
                                <option value="PAB ">Panama Balboa</option>
                                <option value="PGK ">Papua New Guinea Kina</option>
                                <option value="PYG ">Paraguayan Guarani</option>
                                <option value="PEN ">Peruvian Nuevo Sol</option>
                                <option value="PHP ">Philippine Peso</option>
                                <option value="PLN ">Polish Zloty</option>
                                <option value="QAR ">Qatar Rial</option>
                                <option value="RON ">Romanian New Leu</option>
                                <option value="RWF ">Rwanda Franc</option>
                                <option value="WST ">Samoa Tala</option>
                                <option value="STD ">Sao Tome Dobra</option>
                                <option value="SAR ">Saudi Arabian Riyal</option>
                                <option value="SCR ">Seychelles Rupee</option>
                                <option value="SLL ">Sierra Leone Leone</option>
                                <option value="SGD ">Singapore Dollar</option>
                                <option value="SKK ">Slovak Koruna</option>
                                <option value="SBD ">Solomon Islands Dollar</option>
                                <option value="SOS ">Somali Shilling</option>
                                <option value="LKR ">Sri Lanka Rupee</option>
                                <option value="SHP ">St Helena Pound</option>
                                <option value="SDG ">Sudanese Pound</option>
                                <option value="SZL ">Swaziland Lilageni</option>
                                <option value="SEK ">Swedish Krona</option>
                                <option value="SYP ">Syrian Pound</option>
                                <option value="THB ">Thai Baht</option>
                                <option value="TRY ">Turkish Lira</option>
                                <option value="TWD ">Taiwan Dollar</option>
                                <option value="TZS ">Tanzanian Shilling</option>
                                <option value="TOP ">Tongan paʻanga</option>
                                <option value="TTD ">Trinidad Tobago Dollar</option>
                                <option value="TND ">Tunisian Dinar</option>
                                <option value="AED ">UAE Dirham</option>
                                <option value="UGX ">Ugandan Shilling</option>
                                <option value="UAH ">Ukraine Hryvnia</option>
                                <option value="UYU ">Uruguayan New Peso</option>
                                <option value="VUV ">Vanuatu Vatu</option>
                                <option value="VND ">Vietnam Dong</option>
                                <option value="YER ">Yemen Riyal</option>
                                <option value="ZMK ">Zambian Kwacha</option>
                                <option value="ZWD ">Zimbabwe dollar</option>
                                <option value="VEF ">Venezuelan Bolivar</option>
                                <option value="UZS ">Uzbekistan Sum</option>
                                <option value="KGS ">Kyrgyzstan Som</option>
                                <option value="GHS ">Ghanaian Cedi</option>
                            </select>
                        </div>
                    </fieldset>
                    <!-- <span class="simulater-inverse " onclick="inversefxexchangerate() ">&#8645;</span> -->
                    <fieldset class="box-simulater ">
                        <label class="label-simulater ">À:</label>
                        <div class="scrollable ">
                            <select
                                class="select-simulater "
                                id="fxexchangerateTo "
                                name="to "
                                onchange="getCurrencys(event) "
                            >
                                <option value="XOF " selected="selected ">Ivory Coast</option>
                                <option value="XOF ">Burkina Faso</option>
                                <option value="XOF ">Mali</option>
                                <option value="XOF ">Niger</option>
                                <option value="XOF ">Togo</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                <div class="container-simulater--converter ">
                    <fieldset class="simulater-converter ">
                        <label class="converter-title ">Votre envoi</label>
                        <span class="converter-items ">
								<p class="items-text " id="fxspanfm ">EUR</p>
								<input class="converter-items-input "
                                       placeholder="1 "
                                       type="text "
                                       id="fxexchangerateAmount "
                                       name="amount "
                                       onkeyup="getCurrencys(event) "/>
							</span>
                    </fieldset>
                    <fieldset class="simulater-converter ">
                        <label class="converter-title ">Ils reçoivent</label>
                        <span class="converter-items ">
								<p class="items-text " id="fxspanto ">FCFA</p>
								<p class="converter-items-input " id="fxexchangerateResult ">1</p>
							</span>
                    </fieldset>
                    <span class="container-simulater--description ">
							<p class="simulater-description description-rate ">Taux du jour: €1 = 655.96 FCFA</p>
							<p class="simulater-description "> €2.00 fee</p>
						</span>
                </div>
            </form>
            <div class="firstbox-simulater ">
                <div class="box-titulo ">
                    <h2 class="title-simulater ">Simulez votre transfert</h2>
                    <h3 class="subtitle-simulater ">QuickCash est actuellement disponible dans ces pays:</h3>
                </div>
                <ul class="box-country ">
                    <li class="country-name "><img src="{{ asset("img/Flag_Ivory_Coast.svg") }}" class="country-flag " alt="country-flag ">Côte d'ivoire</li>
                    <li class="country-name "><img src="{{ asset("img/Flag_of_Burkina_Faso.svg") }}" class="country-flag " alt="country-flag ">Burkina Faso</li>
                    <li class="country-name "><img src="{{ asset("img/Flag_of_Mali.svg") }}" class="country-flag " alt="country-flag ">Mali</li>
                    <li class="country-name "> <img src="{{ asset("img/Flag_of_Togo.svg") }}" class="country-flag-togo " alt="country-flag ">Togo</li>
                    <li class="country-name "><img src="{{ asset("img/Flag_of_Niger.svg") }}" class="country-flag " alt=" ">Niger</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="s-slide">
        <div class="wrapper-simulater ">
            <div class="box-slide ">
                <div class="slide ">
                    <figure class="seta-desktop "><img src="{{ asset("img/noun_Arrow_2427329%20(1).svg") }}" onclick="plusDivs(1) ">
                    </figure>
                    <div for="slide " class="slide-box ">
                        <figure class="slide-figure ">
                            <img src="{{asset("img/Marie.png")}}" alt="Marie-picture " class="img-slide ">
                        </figure>
                        <span class="box-depoiment ">
										<p class="depoiment-text ">Vivre loin de sa famille n’est pas facile en tant qu’homme et j’ai le devoir de subvenir aux besoins de ma famille. Avec QuickCash je ne me fais plus de soucis car envoyer de l’argent à ma famille n’a jamais été aussi facile et surtout les frais de transactions sont très abordables.</p>
										<h3 class="depoiment-title ">MARIE</h3>
									</span>
                    </div>
                    <div for="slide " class="slide-box ">
                        <figure class="slide-figure ">
                            <!-- <img class="img-slide " src="./assets/img/depoimento2.png " alt=" "> -->
                            <img src="{{ asset("img/Eliane.jpg") }}" alt="" class="img-slide ">
                        </figure>
                        <span class="box-depoiment ">
										<p class="depoiment-text ">C’est mon amie qui m’a parlé de QuickCash qu’elle utilisait pour envoyer de l’argent à ses parents, alors j’ai moi aussi décidé de tester et depuis je n’utilise plus d’autre service d’envoi d’argent surtout pour la proximité des points d’envoi.</p>
										<h3 class="depoiment-title "> ELIANE</h3>
									</span>
                    </div>
                    <div for="slide " class="slide-box ">
                        <figure class="slide-figure ">
                            <!-- <img class="img-slide " src="./assets/img/depoimento3.png " alt=" "> -->
                            <img src="{{ asset("img/Emmanuel%20testimony.jpg") }}" alt=" " class="img-slide ">
                        </figure>
                        <span class="box-depoiment ">
										<p class="depoiment-text ">Quand je suis arrivé en Côte d’Ivoire j’ai été confronté à un souci, j’avais égaré mon sac avec toutes mes affaires carte de crédit tout. Grâce au réseau de QuickCash j’ai pu recevoir de l’argent depuis la France et heureusement quelque jours après j’ai été contacté par quelqu’un qui avait trouvé mes affaires intacte.</p>
										<h3 class="depoiment-title ">EMMANUEL</h3>
									</span>
                    </div>
                    <figure class="seta-desktop "><img src="{{ asset("img/noun_Arrow_2427329.svg") }}" onclick="plusDivs(-1) ">
                    </figure>
                    <div class="seta-mobile ">
                        <figure><img src="{{ asset("img/noun_Arrow_2427329%20(1).svg") }}" onclick="plusDivs(1) "></figure>
                        <figure><img src="{{ asset("img/noun_Arrow_2427329.svg") }}" onclick="plusDivs(-1) "></figure>
                    </div>
                    <div class="circle-slide1 "></div>
                </div>
            </div>
            <div class="box-writing ">
                <p class="writing ">Pour vous offrir une meilleure expérience de transfert d'argent</p>
                <div class="circle-slide2 "></div>
            </div>
        </div>
    </section>
    <section id="container-agency" class="map ">
        <div class="wrapper-agency container ">
            <img class="icon-agency " src="{{ asset("img/globo.svg") }}assets/pages/Assets/ " alt="globo ">
            <h2 class="title-agency ">Trouvez une agence près de vous</h2>

            <form class="form-agency map-form ">
                <label
                    class="label-agency map-label "
                    for="country ">
                    Pays
                    <select
                        id="country "
                        class="map-select "
                        name="country "
                        placeholder="country "
                        onchange="handleData(event) "
                    >
                        <option id="-1 ">Choisir une pays</option>
                        <option value="Cote d 'Ivoire">COTE D'IVOIRE</option>
                    </select>
                </label>
                <label class="label-agency map-label" for="city">
                    Ville
                    <select
                        name="city"
                        id="city"
                        placeholder="City"
                        onchange="handleData(event)"
                    >
                        <option value="">Choisir une ville</option>
                    </select>
                </label>
                <label class="label-agency map-label" for="agency">
                    Agence
                    <select
                        name="agency"
                        id="agency"
                        placeholder="Agency"
                        onchange="handleData(event)"
                    >
                        <option value="">Choisir une agence</option>
                    </select>
                </label>
                <button class="button-agency" type="button" onclick="filterAgency()">
                    Chercher
                </button>
            </form>
            <div class="map-content" id="mapContent">
                <!-- Dinamic content -->
            </div>
        </div>
    </section>
    <section id="social-impact-news">
        <div class="wrapper-impact">
            <div class="wapper-social">
                    <span class="span-title">
						<h2 id="news" class="title-social">Actualités</h2>
					</span>
                <div class="impact-news">
                    <div class="social-impact">
                        <div class="box-img-social">
                            <figure class="social-figure">
                                <img class="img-impact" src="{{ asset("img/forum-mondiale.png") }}" alt="">
                            </figure>
                            <div class="box-txt-social">
                                <h3 class="title-socialimpact" data-translatable>Quickcash au forum mondial des droits de l’homme au maroc</h3>
                                <p class="p-socialimpact" data-translatable>
                                    Création de LIFA TRANSFER au États Unis, une filiale de
                                    Timbuctu Exchange. LIFA TRANSFER est une plateforme de transfert digital entièrement
                                    Mettre une image d’illustration et ce lien : https://www.lifatransfer.com
                                </p>
                                <!-- <span class="showmore-news" id="box-news-span">
                                    &lt;Show more News&gt;
                                </span> -->
                            </div>
                        </div>
                        <div class="box-img-social reverse">
                            <figure class="social-figure">
                                <img class="img-impact" src="{{ asset("img/Atelier%20secteur%20agricole.png") }}" alt="">
                            </figure>
                            <div class="box-txt-social">
                                <h3 class="title-socialimpact" data-translatable>Le secteur agricole face aux enjeux du changement climatique</h3>
                                <p class="p-socialimpact" data-translatable>Le 21 Novembre 2014, à l’initiative de la CGECI (Confédération Générale des Entreprises de Côte d’Ivoire) et l’UNEMAF (L’Union des Entreprises Agricoles et Forestières) s’est tenue à la Maison de l’Entreprise, sise
                                    au plateau, un atelier d’information et de sensibilisation des acteurs du secteur agricole. Les thèmes abordés étaient relatifs à l’impact des changements climatiques sur l’agriculture et les stratégies d’adaptation
                                    et d’atténuation de leurs effets. La présence de QUICKCASH à cet atelier se justifiait par le fait que la majorité de sa clientèle est constituée d’agriculteurs. Nous avons donc tenu à mettre l’information à la
                                    disposition de nos clients.</p>
                                <!-- <span class="showmore-news" id="box-news-span1">
                                    &lt;Show more News&gt;
                                </span> -->
                            </div>
                        </div>
                        <div class="box-img-social">
                            <figure class="social-figure">
                                <img class="img-impact" src="{{ asset("img/Forum_RSE_Lille.jpg") }}" alt="">
                            </figure>
                            <div class="box-txt-social">
                                <h3 class="title-socialimpact">QuickCash au forum de Lille sur la RSE</h3>
                                <p class="p-socialimpact">La 8e édition du Forum Internationale de Lille, s’est ouverte du 21 au 24 Octobre 2014 devant un public de plus de 6.000 participants autour de 9 défis majeurs : Les ressources de la science et des technologies, de
                                    l’emploi, des inégalités, de l’éducation, de la démographie, la finance, de l’information et des territoires. Les cérémonies d’ouverture et de clôture a vu la participation des précurseurs du social business que
                                    sont le Pr YUNUS MUHAMMAD Prix Nobel de la Paix et TONY MELOTO.</p>
                                <!-- <span class="showmore-news" id="box-news-span2">
                                &lt;Show more News&gt;
                            </span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="div-part">
            <div class="box-part">
                <h2 class="title-partners">Partenaire stratégique</h2>
                <div class="list-part">
                    <img src="{{ asset("img/Logo_APG.png") }}" class="logo-apg" alt="">
                    <img src="{{ asset("img/logo_ASUSU_SA.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_BPEC_(banque%20populaire).jpg") }}" class="logo-bpec" alt="">
                    <img src="{{ asset("img/Logo_Bank_of_africa_logo.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_KATARI_SARL.jpeg") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_Sonapost_Burkina_Faso.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_shakaexpress.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_CNCE.jpg") }}" class="img-part" alt="">
                    <img src="{{ asset("img/logo_TIMBUKTU_XECHANGE.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/logo_TRANSFAST.png") }}" class="logo-part" alt="">
                    <img src="{{ asset("img/logo_WORLREMIT.png") }}" class="logo-part" alt="">
                </div>
            </div>
            <div class="box-part">
                <h2 class="title-partners">Partenaires institutionnels</h2>
                <div class="list-part">
                    <img src="{{ asset("img/Logo_stanford-university.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/19.png") }}" class="img-part img-banque" alt="Banque populaire">
                    <img src="{{ asset("img/Logo_CGECI.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_Exxonmobil.png") }}" class="img-part" alt="">
                    <img src="{{ asset("img/Logo_Plan.jpg") }}" class="img-part" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
