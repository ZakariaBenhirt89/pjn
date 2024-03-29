@extends('admin.layouts.app_create_acount')

@section('content_create_account')

    <div style="margin-top: 17%;" class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="nk-block-head nk-block-head-lg">
                                    <div class="nk-block-head-content">
                                        <h2 style="color:#00782d;font-weight: bold !important;" class="nk-block-title fw-normal">Fiche d’Accueil - COIP</h2>
                                        <div class="nk-block-des">
                                            <p class="lead">Using the <a href="#" target="_blank">jQuery Steps</a> plugin, you can simply make step based form. You can combine with <a href="https://jqueryvalidation.org/" target="_blank">jQuery Validation</a> plugin for form validation. For a full overview of the Steps plugin, check out the <a href="http://www.jquery-steps.com/" target="_blank">documentation</a>.</p>
                                            <p class="lead">Using the <a href="#" target="_blank">jQuery Steps</a> plugin, you can simply make step based form. You can combine with <a href="https://jqueryvalidation.org/" target="_blank">jQuery Validation</a> plugin for form validation.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 videio">

                                <div class="card">
                                    <div class="card-play"></div>
                                    <div class="card-video">
                                        <iframe id="video" src="https://www.youtube.com/embed/JE9z-gy4De4?enablejsapi=1&amp;html5=1&amp;iv_load_policy=3&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div style="margin-top: 1%;" class="nk-block nk-block-lg">


                                    <div style="text-align: center" class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 style="font-weight: bold !important;" class="title nk-block-title">Wizard Form - Basic</h4>
                                            <div class="nk-block-des">
                                                <p>A basic demostration of wizard form.</p>
                                            </div>
                                        </div>

                                </div>


                            <div style="    border: 4px solid;border-image: linear-gradient(60deg, rgb(0 120 45), rgb(252 196 0)) 1;" class="card card-bordered">
                                <div class="card-inner">
                                    <form action="{{ route('store.account') }}" method="POST" id="send_forms" enctype="multipart/form-data" class="nk-wizard nk-wizard-simple is-alter" >
                                        @csrf


                                        <div class="nk-wizard-head">
                                            <h5 style="font-size: 16px !important;"><img style="margin-bottom: 7px;" width="80" src="{{ asset('images/icon_3.svg') }}" /><br/> Informations personnelles</h5>
                                        </div>
                                        <div class="nk-wizard-content">
                                            <div class="row gy-3">
                                                <div class="col-md-12">

                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' name="image_profile" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                                    <rect x="15" y="5" width="56" height="70" rx="6" ry="6" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                                    <path d="M69.88,85H30.12A6.06,6.06,0,0,1,24,79V21a6.06,6.06,0,0,1,6.12-6H59.66L76,30.47V79A6.06,6.06,0,0,1,69.88,85Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                    <polyline points="60 16 60 31 75 31.07" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                                                                    <rect x="40" y="45" width="23" height="19" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                                    <rect x="36" y="49" width="23" height="19" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                                    <polyline points="37 62.88 45.12 55.94 52.81 63.06 55.99 59.44 59 62.76" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                                                                    <circle cx="52.11" cy="54.98" r="2.02" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                                                </svg></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview" style="background-image: url({{ asset('images/man.png') }});">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-first-name">Nom <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="text" data-msg="Obligatoire" class="form-control required" id="fw-first-name" name="first_name" required>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Prénom <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="text" data-msg="Obligatoire" class="form-control required" id="fw-last-name" name="last_name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-nationality">Nationalité</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="text"  class="form-control" id="fw-nationality" name="nationality" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-nationality">Genre <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                <input type="radio" class="custom-control-input required"  data-msg="Obligatoire" name="genre" id="btnIconRadio1" value="Homme" />
                                                                <label class="custom-control-label" for="btnIconRadio1"><img width="26" src="{{ asset('images/man.png') }}" /><span>Homme</span></label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                <input type="radio" class="custom-control-input required" name="genre" id="btnIconRadio2" value="Femme" />
                                                                <label class="custom-control-label" for="btnIconRadio2"><img width="26" src="{{ asset('images/woman.png') }}" /><span>Femme</span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="date-de-naissance">Date de naissance <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-calendar"></em>
                                                            </div>
                                                            <input type="text" name="date_naissance" data-msg="Obligatoire" class="form-control date-picker required" id="date-de-naissance" data-date-format="yyyy-mm-dd">
                                                        </div>
                                                        <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lieu-de-naissance">Lieu de naissance</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="text" class="form-control" id="lieu-de-naissance" name="lieu_naissance" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lieu-de-naissance">Territoire <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">

                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio" >
                                                                        <input type="radio" id="customRadio1" name="territoire"class="custom-control-input required" data-msg="Obligatoire" value="Province Nouaceur" />
                                                                        <label class="custom-control-label" for="customRadio1">Province Nouaceur</label>
                                                                    </div>

                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="customRadio2" name="territoire"  class="custom-control-input" value="autre_province" />
                                                                        <label class="custom-control-label" for="customRadio2">Autre Préfecture/Province</label>
                                                                    </div>
                                                                </li>
                                                                <li style=" display:none;" class="autre_province">
                                                                    <input type="text" name="autre_province" class="form-control" id="autre_province_accept" value=""  />
                                                                </li>






                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Address</label>
                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"> <em class="icon ni ni-user"></em></span>
                                                                </div>
                                                                <textarea class="form-control" id="address" name="address" aria-label="With textarea"></textarea>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cin">N° de CIN <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="text" data-msg="Obligatoire" class="form-control required" id="cin" name="cin" />
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="tel1">Téléphone 1 <span class="text-danger">*</span></label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="number" data-msg="Obligatoire" class="form-control required" id="tel1" name="tel1" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email1">E-mail personnel 1</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="email" data-msg="Required" class="form-control" id="email1" name="email1" />
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="tel2">Téléphone 2</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <input type="number" data-msg="Required" class="form-control" id="tel2" name="tel2" />
                                                        </div>

                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Comment avez-vous connu la plateforme des jeunes Nouaceur ?</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="ami" value="par_Un_ami" />
                                                                        <label class="custom-control-label" for="ami">Par un ami</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="oreille" value="Par_le_bouche_oreille" />
                                                                        <label class="custom-control-label" for="oreille">Par le bouche à oreille</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="famille" value="par_la_famille" />
                                                                        <label class="custom-control-label" for="famille">Par la famille</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="Internet" value="sur_Internet" />
                                                                        <label class="custom-control-label" for="Internet">Sur Internet</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="association" value="par_le_biais_une_association" />
                                                                        <label class="custom-control-label" for="association">Par le biais d’une association</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="agent" value="agent_de_mobilisation" />
                                                                        <label class="custom-control-label" for="agent">Agent de mobilisation </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="connu_notre_service[]" id="ambassadeur" value="laureat_Ambassadeur">
                                                                        <label class="custom-control-label" for="ambassadeur">Lauréat / Ambassadeur </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input autre" name="connu_notre_service[]" id="Autre" value="Autre">
                                                                        <label class="custom-control-label" for="Autre">Autre</label>
                                                                    </div>

                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input autre_service"  name="connu_notre_service_autre" id="Autre" value="">

                                                                    </div>
                                                                </li>
                                                                <li style="display: none;" class="connu_notre_service_autre">
                                                                    <input type="text"  class="form-control" placeholder="Autre" id="connu_notre_service_autre" name="connu_notre_service_autre" value="" />
                                                                </li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>





                                            </div>
                                        </div>

                                        <div class="nk-wizard-head">
                                            <h5 style="font-size:16px !important;"><img width="80" style="margin-bottom: 7px;" src="{{ asset('images/icon_2.svg') }}" /><br/> Informations générales</h5>
                                        </div>
                                        <div class="nk-wizard-content">
                                            <div class="row gy-3">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="membres_de_famille">Nombre des membres de famille:</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number"  class="form-control" id="membres_de_famille" name="membres_de_famille" />
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-username">Nombre de personnes ayant une activité salariale au sien de votre famille :</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="fw-username" name="personnes_ayant_une_activite_salariale" />
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Ressources</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="ressources" id="Ressources" value="Ressources_propres" />
                                                                        <label class="custom-control-label" for="Ressources">Ressources propres</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="ressources" id="parents" value="Pris_en_charge_par_les_parents" />
                                                                        <label class="custom-control-label" for="parents">Pris en charge par les parents</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input autre_ressources" name="ressources" id="autre_ressources" value="Autre">
                                                                        <label class="custom-control-label" for="autre_ressources">Autre</label>
                                                                    </div>
                                                                </li>
                                                                <li></li>
                                                                <li style="display: none;width: 67%;" class="autre_input_ressources">
                                                                    <input class="form-control" name="ressources_autre" type="text" />
                                                                </li>




                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Situation Familiale: </label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="situation_familiale" id="Celibataire" value="Celibataire" />
                                                                        <label class="custom-control-label" for="Celibataire">Célibataire</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="situation_familiale" id="Marie" value="Marie_Nombre_denfants" />
                                                                        <label class="custom-control-label" for="Marie">Marié(e) Nombre d’enfants</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Divorce" name="situation_familiale" id="Divorce">
                                                                        <label class="custom-control-label" for="Divorce">Divorcé(e)</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Veuf" name="situation_familiale" id="Veuf">
                                                                        <label class="custom-control-label" for="Veuf">Veuf</label>
                                                                    </div>
                                                                </li>





                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Logement: </label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" value="Locataire" name="logement" id="locataire">
                                                                        <label class="custom-control-label" for="locataire">Locataire</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="logement" value="Proprietaire" id="proprietaire">
                                                                        <label class="custom-control-label" for="proprietaire">Propriétaire</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" value="Bidonville" name="logement" id="bidonville">
                                                                        <label class="custom-control-label" for="bidonville">Bidonville</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="checkbox" class="custom-control-input" name="logement" value="Autres" id="autres_Logement">
                                                                        <label class="custom-control-label" for="autres_Logement">Autres</label>
                                                                    </div>
                                                                </li>





                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content text-center">
                                                            <h4 class="title nk-block-title">état physique</h4>
                                                            <div class="nk-block-des">
                                                                <p>While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Souffrez-vous d’un handicap quelconque ?</label>
                                                        <div class="form-control-wrap">
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="handicap_oui" name="handicap_quelconque" class="custom-control-input" value="OUI" />
                                                                        <label class="custom-control-label" for="handicap_oui">OUI</label>
                                                                    </div>


                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="handicap_non" name="handicap_quelconque" class="custom-control-input" value="NON" />
                                                                        <label class="custom-control-label" for="handicap_non">NON</label>
                                                                    </div>
                                                                </li>



                                                            </ul>


                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Type de handicap</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control  custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="type_de_handicap" id="Physique" value="Physique" />
                                                                        <label class="custom-control-label" for="Physique">Physique</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="type_de_handicap" value="Sensoriel" id="Sensoriel">
                                                                        <label class="custom-control-label" for="Sensoriel">Sensoriel</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="type_de_handicap" value="Mental" id="Mental">
                                                                        <label class="custom-control-label" for="Mental">Mental</label>
                                                                    </div>
                                                                </li>







                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Cause du handicap</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="cause_du_handicap" id="Naissance" value="Naissance" />
                                                                        <label class="custom-control-label" for="Naissance">Naissance</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Accident" name="cause_du_handicap" id="Accident">
                                                                        <label class="custom-control-label" for="Accident">Accident</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Maladie" name="cause_du_handicap" id="Maladie">
                                                                        <label class="custom-control-label" for="Maladie">Maladie</label>
                                                                    </div>
                                                                </li>







                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Mobilité</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="mobilite" id="Deplacement" value="Deplacement_sans_aide" />
                                                                        <label class="custom-control-label" for="Deplacement">Déplacement sans aide</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="mobilite" id="Possibilite" value="Possibilite_de_travailler_debout" />
                                                                        <label class="custom-control-label" for="Possibilite">Possibilité de travailler debout</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Possibilite_de_monter_des_escaliers" name="mobilite" id="escaliers" />
                                                                        <label class="custom-control-label" for="escaliers">Possibilité de monter des escaliers</label>
                                                                    </div>
                                                                </li>







                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Souffrez-vous d’une maladie chronique ?</label>
                                                        <div class="form-control-wrap">

                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="maladie_oui"  name="maladie_chronique" class="custom-control-input maladie_oui" value="OUI" />
                                                                        <label class="custom-control-label" for="maladie_oui">OUI</label>
                                                                    </div>


                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="maladie_non"  name="maladie_chronique" class="custom-control-input" value="NON" />
                                                                        <label class="custom-control-label" for="maladie_non">NON</label>
                                                                    </div>
                                                                </li>
                                                                <li class="maladie_chronique" style="  display: none;">
                                                                    <input type="text" class="form-control" id="maladie_chronique_accept" name="maladie_chronique_oui" />
                                                                </li>


                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Avez-vous un antécédent médical qui pourrait affecter votre rendement au travail ?</label>
                                                        <div class="form-control-wrap">

                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="rendement_travail_oui" name="rendement_travail" class="custom-control-input" value="OUI" />
                                                                        <label class="custom-control-label" for="rendement_travail_oui">OUI</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="rendement_travail" id="rendement_travail_non" value="NON" />
                                                                        <label class="custom-control-label" for="rendement_travail_non">Non</label>
                                                                    </div>
                                                                </li>
                                                                <li class="rendement_travail" style="display: none">
                                                                    <input type="text" class="form-control" id="rendement_travail_accept" name="rendement_travail_oui" />
                                                                </li>


                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- .row -->

                                        </div>
                                        <div class="nk-wizard-head">
                                            <h5 style="font-size:16px !important;"><img width="80" style="margin-bottom: 7px;" src="{{ asset('images/icon_4.svg') }}" /><br/> Informations professionnelles</h5>
                                        </div>
                                        <div class="nk-wizard-content">
                                            <div class="row gy-2">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Niveau scolaire :</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-left">
                                                                <em class="icon ni ni-user"></em>
                                                            </div>
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" name="niveau_scolaire" value="Aucune" id="Aucune">
                                                                        <label class="custom-control-label" for="Aucune">Aucune</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Niveau_primaire" name="niveau_scolaire" id="primaire">
                                                                        <label class="custom-control-label" for="primaire">Niveau primaire</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Fin_de_parcours_scolaire" name="niveau_scolaire" id="scolaire">
                                                                        <label class="custom-control-label" for="scolaire">Fin de parcours scolaire</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Niveau_college" name="niveau_scolaire" id="college">
                                                                        <label class="custom-control-label" for="collège">Niveau collège</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="Niveau_lycee" name="niveau_scolaire" id="lycee">
                                                                        <label class="custom-control-label" for="lycée">Niveau lycée</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input" value="En_cours_de_formation" name="niveau_scolaire" id="en_cours__formation">
                                                                        <label class="custom-control-label" for="en_cours__formation">En cours de formation</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-checkbox custom-control-pro no-control">
                                                                        <input type="radio" class="custom-control-input avec_diplome" value="Avec_diplome" name="niveau_scolaire" id="avec_diplome">
                                                                        <label class="custom-control-label" for="avec_diplome">Avec diplôme</label>
                                                                    </div>
                                                                </li>
                                                                <li class="avec_diplome_accept" style="display: none">
                                                                    <input type="text" class="form-control" name="niveau_scolaire_avec_diplome" id="niveau_scolaire" placeholder="quel type de diplôme" />
                                                                </li>







                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-first-name">Vous avez parcouru la plateforme digitale, vous avez besoin d’être orienté vers quel axe ?</label>
                                                        <div class="form-control-wrap">

                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="employabilite" name="oriente_vers" class="custom-control-input" value="employabilite">
                                                                        <label class="custom-control-label" for="employabilite">Axe appui à l’employabilité</label>
                                                                    </div>


                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="entrepreneuriat" name="oriente_vers" class="custom-control-input" value="entrepreneuriat">
                                                                        <label class="custom-control-label" for="entrepreneuriat">Axe appui à l’entrepreneuriat</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="autre_service" name="oriente_vers" class="custom-control-input autre_service" value="Autre_Service">
                                                                        <label class="custom-control-label" for="autre_service">Autre service</label>
                                                                    </div>
                                                                </li>
                                                                <li class="autre_service_accept" style="display: none">
                                                                    <input type="text" name="oriente_vers_autre" id="autre_service_accept_oui" class="form-control" />
                                                                </li>



                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="objectif_professionnel">Quel est votre objectif professionnel ?</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control valid" id="objectif_professionnel" name="objectif_professionnel" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-first-name">Souhait d’une formation ?</label>
                                                        <div class="form-control-wrap">

                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="souhait_formation_oui" name="souhait_formation" class="custom-control-input" value="OUI">
                                                                        <label class="custom-control-label" for="souhait_formation_oui">OUI</label>
                                                                    </div>


                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="souhait_formation_non" name="souhait_formation" class="custom-control-input" value="NON">
                                                                        <label class="custom-control-label" for="souhait_formation_non">NON</label>
                                                                    </div>
                                                                </li>

                                                                <li class="souhait_formation_accept" style="display: none">
                                                                    <input type="text" name="souhait_formation_oui" id="souhait_formation_accept" class="form-control" value="" />
                                                                </li>



                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div><!-- .row -->
                                        </div>
                                        <div class="nk-wizard-head">
                                            <h5 style="font-size:16px !important;"><img width="80" style="margin-bottom: 7px;" src="{{ asset('images/icon_1.svg') }}" /><br/> Disponibilité</h5>
                                        </div>
                                        <div class="nk-wizard-content">
                                            <div class="row gy-2">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email2">Notre agent d’accueil d’écoute et d’orientation va prendre contact avec vous, êtes-vous disponible pour bénéficier d’une de nos formation ?</label>
                                                        <div class="form-control-wrap">

                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="disponible_oui" name="disponible" class="custom-control-input" value="OUI">
                                                                        <label class="custom-control-label" for="disponible_oui">OUI</label>
                                                                    </div>


                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-control-sm custom-radio">
                                                                        <input type="radio" id="disponible_non" name="disponible" class="custom-control-input" value="NON">
                                                                        <label class="custom-control-label" for="disponible_non">NON</label>
                                                                    </div>
                                                                </li>





                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div><!-- .row -->
                                        </div>
{{--                                        <div class="nk-wizard-head">--}}
{{--                                            <h5><img width="41" src="{{ asset('images/online-registration.png') }}" /> Crédits</h5>--}}
{{--                                        </div>--}}
{{--                                        <div class="nk-wizard-content">--}}
{{--                                            <div class="row gy-2">--}}
{{--                                                <div class="col-md-12">--}}
{{--                                                    <div class="alert alert-pro alert-primary">--}}
{{--                                                        <div class="alert-text">--}}
{{--                                                            <h6>Crédits</h6>--}}

{{--                                                            <div class="form-group">--}}
{{--                                                                <label class="form-label" for="default-01">Email</label>--}}
{{--                                                                <div class="form-control-wrap">--}}
{{--                                                                    <input type="text" class="form-control" name="email" id="default-01" placeholder="Email">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label class="form-label" for="default-01">Password</label>--}}
{{--                                                                <div class="form-control-wrap">--}}

{{--                                                                    <input type="text" class="form-control" name="password" id="sup" placeholder="mot de passe">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="form-group">--}}
{{--                                                                <label class="form-label" for="default-01"></label>--}}
{{--                                                                <div class="form-control-wrap">--}}
{{--                                                                    <button type="button" class="btn btn-dim btn-outline-success passGen">Créer Un Mot de passe</button>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}




{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

{{--                                            </div><!-- .row -->--}}
{{--                                        </div>--}}

                                        {{--                                        <input type="submit" class="btn btn-success" value="send" />--}}

                                    </form>
                                </div>
                            </div>
                        </div><!-- .nk-block -->

                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function (){
            /*start crop*/
            function readURL(input) {
                if (input.files && input.files[0]) {

                    console.log('im here !!');

                    var reader = new FileReader();
                    reader.onload = function(e) {

                        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);


                }
            }
            $("#imageUpload").change(function() {

                readURL(this);
            });
            /*end  crop*/
            $('.autre').on('click',function (){
                if($('input[name="autre"]').is(':checked')){
                    $('.more_details').css('display','block');
                }else {
                    $('.more_details').css('display','none');
                }
                // $('.more_details').css('display','block');
            });
            //
            $('.autre_ressources').on('click',function (){
                if($('input[name="autre_ressources"]').is(':checked')){
                    $('.autre_input_ressources').css('display','block');
                }else{
                    $('.autre_input_ressources').css('display','none');
                }
            });
            //avec un diplome
            //click maladie
            $('input:radio[name="niveau_scolaire"]').change(
                function(){
                    console.log( $(this).val() );
                    if ($(this).is(':checked') && $(this).val() == 'Avec_diplome') {
                        $('.avec_diplome_accept').css('display','block');
                    }else{
                        document.getElementById('niveau_scolaire').value = '';
                        $('.avec_diplome_accept').css('display','none');
                    }
                });
            //autre services
            $('input:checkbox[name="connu_notre_service[]"]').change(
                function(){


                    if ($(this).is(':checked') && $(this).val() == 'Autre') {
                        $('.connu_notre_service_autre').css('display','block');
                    }

                    if(!$(this).is(':checked') && $(this).val() == 'Autre'){
                        document.getElementById('connu_notre_service_autre').value = '';


                        $('.connu_notre_service_autre').css('display','none');
                    }

                });

            //click maladie
            $('input:radio[name="maladie_chronique"]').change(
                function(){
                    if ($(this).is(':checked') && $(this).val() == 'OUI') {
                        $('.maladie_chronique').css('display','block');
                    }else if($(this).is(':checked') && $(this).val() == 'NON'){
                        document.getElementById('maladie_chronique_accept').value = '';
                        $('.maladie_chronique').css('display','none');
                    }else{
                        document.getElementById('maladie_chronique_accept').value = '';
                        $('.maladie_chronique').css('display','none');
                    }
                });
            $('input:radio[name="rendement_travail"]').change(
                function(){
                    if ($(this).is(':checked') && $(this).val() == 'OUI') {
                        $('.rendement_travail').css('display','block');
                    }else if($(this).is(':checked') && $(this).val() == 'NON'){
                        document.getElementById('rendement_travail_accept').value = '';
                        $('.rendement_travail').css('display','none');
                    }else{
                        document.getElementById('rendement_travail_accept').value = '';
                        $('.rendement_travail').css('display','none');
                    }
                });
            $('input:radio[name="oriente_vers"]').change(
                function(){
                    if ($(this).is(':checked') && $(this).val() == 'employabilite') {
                        document.getElementById('autre_service_accept_oui').value = '';
                        $('.autre_service_accept').css('display','none');

                    }else if($(this).is(':checked') && $(this).val() == 'entrepreneuriat'){
                        document.getElementById('autre_service_accept_oui').value = '';
                        $('.autre_service_accept').css('display','none');
                    }else if($(this).is(':checked') && $(this).val() == 'Autre_Service'){
                        $('.autre_service_accept').css('display','block');
                    }
                });
            $('input:radio[name="souhait_formation"]').change(
                function(){


                    if ($(this).is(':checked') && $(this).val() == 'OUI') {
                        $('.souhait_formation_accept').css('display','block');
                    }else if($(this).is(':checked') && $(this).val() == 'NON'){

                        document.getElementById('souhait_formation_accept').value = '';
                        $('.souhait_formation_accept').css('display','none');

                    }else{
                        document.getElementById('souhait_formation_accept').value = '';
                        $('.souhait_formation_accept').css('display','none');
                    }
                });
            $('input:radio[name="territoire"]').change(
                function(){
                    if ($(this).is(':checked') && $(this).val() == 'autre_province') {
                        $('.autre_province').css('display','block');
                    }else{
                        document.getElementById('autre_province_accept').value = '';
                        $('.autre_province').css('display','none');
                    }
                });

            ///GENERATE PASSWORD
            function generatePassword() {
                var length = 10,
                    charPool = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
                    pass = "";
                for (var i = 0, n = charPool.length; i < length; ++i) {
                    pass += charPool.charAt(Math.floor(Math.random() * n));
                }
                return pass;
            }

            $(".passGen").on('click',function(){
                $("#sup").val(generatePassword());
            });


            $( "input" ).keyup(function() {
                var pw = $(this).val(),
                    strength = 0;
                if (pw.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
                    strength += 1;
                }
                if (pw.match(/[~<>?]+/)) {
                    strength += 1;
                }
                if (pw.match(/[!@#$%^&*()]+/)) {
                    strength += 1;
                }
                if(pw.length > 5) {
                    strength += 1;
                }

            });

            ///delete finish button
            // $('[href="#finish"]').html('Soumetre');


            $('[href="#finish"]').on('click',function (e){
                e.preventDefault();

                $( "#send_forms" )[0].submit();

                // $('#send_forms').submit();

            });



        });
    </script>
@endsection
