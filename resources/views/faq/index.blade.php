@extends('layouts.main')

@section('title') @parent | FAQs @endsection

@section('keywords') @parent, FAQs @endsection

@section('description') FAQs @endsection

@section('content')
    <main class="main-content">
        <div id="html-section-product-template" class="html-section">
            <header class="section-header wrapper-breadcrumb">
                <div class="wrapper">
                    <h3>FAQs</h3>
                    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
                        <a href="{{ route('home') }}" title="Back to the frontpage">Accueil</a>
                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <span>FAQs</span>
                    </nav>
                </div>
            </header>
            <div class="wrapper">
                <div class="grid">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="panel-heading active">
                                <h4 class="panel-title"><a class="collapsed"> 1. Quel paiement acceptez-vous ? </a></h4>
                            </div>
                            <div id="velaFaq1" class="panel-collapse collapse active">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="collapsed"> 2. Dans quel pays pouvez-vous livrer? </a></h4>
                            </div>
                            <div id="velaFaq2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="collapsed"> 3. Quels paiements acceptez-vous? </a></h4>
                            </div>
                            <div id="velaFaq3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="collapsed"> 4. Comment suivre mon colis? </a></h4>
                            </div>
                            <div id="velaFaq4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="collapsed"> 5. Comment expédier mon colois? </a></h4>
                            </div>
                            <div id="velaFaq5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="collapsed"> 6. Comment vendre un téléphone? </a></h4>
                            </div>
                            <div id="velaFaq6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">// <![CDATA[
                            $(function () {
                                $("#accordion .panel .panel-heading").click(function(){
                                    $(this).toggleClass('opentab');
                                });
                            });
                            // ]]></script>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
