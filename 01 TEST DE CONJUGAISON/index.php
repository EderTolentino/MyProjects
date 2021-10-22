<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test de Conjugaison</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
       <div class="container_top">
            <div class="flag">
                <img src="img/flag_France.jpg">
            </div>

            <div class="title">
                <h1>TEST DE CONJUGAISON</h1>
            </div>
        </div>
        
        <div id="container_select">
            <h2>Entrez un verbe en français:</h2>
            <p>
                <input type="text" name="verb" id="verb">
                <button id="btn_Conj" onclick="conjugate()">CONJUGUER</button>           
            </p>      
            <p>Conjulguez le verbe sélectionné dans la colonne "test":</p>
            
        </div>
        
        <div class="container_back">
            <section class="container_left">
                <h3>PRÉSENT DE L'INDICATIF</h3>   
                <p>Le présent de l'indicatif est utilisé pour:</p>
                <ul>
                    <li>Parler d'une action que se passe au moment où on parle;</li>
                    <li>parler d'une action habituelle;</li>
                    <li>faire una description du présent de manière générale.</li>
                </ul>
            </section>
            <section class="container_right">
                <h3>PRÉSENT DE L'INDICATIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjPI" name="1psConjPI"></td>
                        <td class="col-3" ><input type="text" id="1psTestePI" name="3ppTestePI"></td>
                        <td class="col-4" id="1psResPI" name="1psResPI"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjPI" name="2psConjPI"></td>
                        <td class="col-3" ><input type="text" id="2psTestePI" name="3ppTestePI"></td>
                        <td class="col-4" id="2psResPI" name="2psResPI"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronPI">Il/Elle/On</td>
                        <td class="col-2" id="3psConjPI" name="3psConjPI"></td>
                        <td class="col-3" ><input type="text" id="3psTestePI" name="3ppTestePI"></td>
                        <td class="col-4" id="3psResPI" name="3psResPI"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjPI" name="1ppConjPI"></td>
                        <td class="col-3" ><input type="text" id="1ppTestePI" name="3ppTestePI"></td>
                        <td class="col-4" id="1ppResPI" name="1ppResPI"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjPI" name="2ppConjPI"></td>
                        <td class="col-3" ><input type="text" id="2ppTestePI" name="3ppTestePI"></td>
                        <td class="col-4" id="2ppResPI" name="2ppResPI"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjPI" name="3ppConjPI"></td>
                        <td class="col-3" ><input type="text" id="3ppTestePI" name="3ppTestePI"></td>
                        <td class="col-4" id="3ppResPI" name="3ppResPI"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td class="col-2" ><button class="btn btn-mostrar" onclick="ocultarResposta('PI')" id="btn_PI">MASQUER</button></td>
                        <td class="col-3"><button class="btn" onclick="conferir('PI')" id="conferirPI">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>                
            </section>
            
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Passé composé</h2>
                <p>Le passé composé est utilisé pour:</p>
                <ul>
                    <li>Le passé composé est le temps principal utilisé pour parler d'une action passée. Souvent, les phrases au passé composé comportent des indications de temps: <em>hier, la semaine dernière...</em></li>
                </ul>
            </section>

            <section class="container_right">
                <h3>PASSÉ COMPOSÉ</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjPAC" name="1psConjPAC"></td>
                        <td class="col-3" ><input type="text" id="1psTestePAC" name="3ppTestePAC"></td>
                        <td class="col-4" id="1psResPAC" name="1psResPAC"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjPAC" name="2psConjPAC"></td>
                        <td class="col-3" ><input type="text" id="2psTestePAC" name="3ppTestePAC"></td>
                        <td class="col-4" id="2psResPAC" name="2psResPAC"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronPAC">Il/Elle/On</td>
                        <td class="col-2" id="3psConjPAC" name="3psConjPAC"></td>
                        <td class="col-3" ><input type="text" id="3psTestePAC" name="3ppTestePAC"></td>
                        <td class="col-4" id="3psResPAC" name="3psResPAC"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjPAC" name="1ppConjPAC"></td>
                        <td class="col-3" ><input type="text" id="1ppTestePAC" name="3ppTestePAC"></td>
                        <td class="col-4" id="1ppResPAC" name="1ppResPAC"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjPAC" name="2ppConjPAC"></td>
                        <td class="col-3" ><input type="text" id="2ppTestePAC" name="3ppTestePAC"></td>
                        <td class="col-4" id="2ppResPAC" name="2ppResPAC"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjPAC" name="3ppConjPAC"></td>
                        <td class="col-3" ><input type="text" id="3ppTestePAC" name="3ppTestePAC"></td>
                        <td class="col-4" id="3ppResPAC" name="3ppResPAC"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('PAC')" id="btn_PAC">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('PAC')" id="conferirPAC">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        
        <div class="container_back">
            <section class="container_left">
                <h2>Imparfait</h2>
                <p>L'imparfait est utilisé pour:</p>
                <ul>
                    <li>Décrire une situation passé (souvent opposée à la situation présente);</li>
                    <li>décrire une habitude du passé;</li>
                    <li>le verbe à l'imparfait donne des précisions sur les circonstances;</li>
                </ul>
            </section>

            <section class="container_right">
                <h3>IMPARFAIT DE L'INDICATIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjIM" name="1psConjIM"></td>
                        <td class="col-3" ><input type="text" id="1psTesteIM" name="3ppTesteIM"></td>
                        <td class="col-4" id="1psResIM" name="1psResIM"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjIM" name="2psConjIM"></td>
                        <td class="col-3" ><input type="text" id="2psTesteIM" name="3ppTesteIM"></td>
                        <td class="col-4" id="2psResIM" name="2psResIM"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronIM">Il/Elle/On</td>
                        <td class="col-2" id="3psConjIM" name="3psConjIM"></td>
                        <td class="col-3" ><input type="text" id="3psTesteIM" name="3ppTesteIM"></td>
                        <td class="col-4" id="3psResIM" name="3psResIM"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjIM" name="1ppConjIM"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteIM" name="3ppTesteIM"></td>
                        <td class="col-4" id="1ppResIM" name="1ppResIM"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjIM" name="2ppConjIM"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteIM" name="3ppTesteIM"></td>
                        <td class="col-4" id="2ppResIM" name="2ppResIM"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjIM" name="3ppConjIM"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteIM" name="3ppTesteIM"></td>
                        <td class="col-4" id="3ppResIM" name="3ppResIM"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('IM')" id="btn_IM">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('IM')" id="conferirIM">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Plus-que-parfait</h2>
                <p>Le plus-que-parfait est utilisé dans une phrase qui présente des événements passés. On utilise le plus-que-parfait quand l'action secondaire s'est déroulée avant l'action principale.</p>
                <p>Les deux actions du passé peuvent être liées: au temps ou à une cause.</p>
            </section>

            <section class="container_right">
                <h3>PLUS-QUE-PARFAIT DE L'INDICATIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjPQP" name="1psConjPQP"></td>
                        <td class="col-3" ><input type="text" id="1psTestePQP" name="3ppTestePQP"></td>
                        <td class="col-4" id="1psResPQP" name="1psResPQP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjPQP" name="2psConjPQP"></td>
                        <td class="col-3" ><input type="text" id="2psTestePQP" name="3ppTestePQP"></td>
                        <td class="col-4" id="2psResPQP" name="2psResPQP"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronPQP">Il/Elle/On</td>
                        <td class="col-2" id="3psConjPQP" name="3psConjPQP"></td>
                        <td class="col-3" ><input type="text" id="3psTestePQP" name="3ppTestePQP"></td>
                        <td class="col-4" id="3psResPQP" name="3psResPQP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjPQP" name="1ppConjPQP"></td>
                        <td class="col-3" ><input type="text" id="1ppTestePQP" name="3ppTestePQP"></td>
                        <td class="col-4" id="1ppResPQP" name="1ppResPQP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjPQP" name="2ppConjPQP"></td>
                        <td class="col-3" ><input type="text" id="2ppTestePQP" name="3ppTestePQP"></td>
                        <td class="col-4" id="2ppResPQP" name="2ppResPQP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjPQP" name="3ppConjPQP"></td>
                        <td class="col-3" ><input type="text" id="3ppTestePQP" name="3ppTestePQP"></td>
                        <td class="col-4" id="3ppResPQP" name="3ppResPQP"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('PQP')" id="btn_PQP">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('PQP')" id="conferirPQP">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Futur simple</h2>
                <p>Le futur simple est utilisé pour:</p>
                <ul>
                    <li>Formuler des prévisions, des prédictions;</li>
                    <li>faire une promesse, exprimer una résolution;</li>
                    <li>donner une directive, une consigne ou exprimer un refus catégorique;</li>
                    <li>indiquer un programme.</li>
                </ul>
            </section>

            <section class="container_right">
                <h3>FUTUR SIMPLE DE L'INDICATIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjFS" name="1psConjFS"></td>
                        <td class="col-3" ><input type="text" id="1psTesteFS" name="3ppTesteFS"></td>
                        <td class="col-4" id="1psResFS" name="1psResFS"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjFS" name="2psConjFS"></td>
                        <td class="col-3" ><input type="text" id="2psTesteFS" name="3ppTesteFS"></td>
                        <td class="col-4" id="2psResFS" name="2psResFS"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronFS">Il/Elle/On</td>
                        <td class="col-2" id="3psConjFS" name="3psConjFS"></td>
                        <td class="col-3" ><input type="text" id="3psTesteFS" name="3ppTesteFS"></td>
                        <td class="col-4" id="3psResFS" name="3psResFS"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjFS" name="1ppConjFS"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteFS" name="3ppTesteFS"></td>
                        <td class="col-4" id="1ppResFS" name="1ppResFS"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjFS" name="2ppConjFS"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteFS" name="3ppTesteFS"></td>
                        <td class="col-4" id="2ppResFS" name="2ppResFS"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjFS" name="3ppConjFS"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteFS" name="3ppTesteFS"></td>
                        <td class="col-4" id="3ppResFS" name="3ppResFS"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('FS')" id="btn_FS">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('FS')" id="conferirFS">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Futur antérieur</h2>
                <p>Le futur antérieur est utilisé pour indiquer que l'action secondaire s'est déroulée avant l'action principale.</p>
                <ul>
                    <li>L'action principale est au futur simple ou à l'impératif.</li>
                    <li>L'action secondaire est généralement introduite par une conjonction de temps.</li>
                </ul>
            </section>

            <section class="container_right">
                <h3>FUTUR ANTÉRIEUR DE L'INDICATIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjFA" name="1psConjFA"></td>
                        <td class="col-3" ><input type="text" id="1psTesteFA" name="3ppTesteFA"></td>
                        <td class="col-4" id="1psResFA" name="1psResFA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjFA" name="2psConjFA"></td>
                        <td class="col-3" ><input type="text" id="2psTesteFA" name="3ppTesteFA"></td>
                        <td class="col-4" id="2psResFA" name="2psResFA"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronFA">Il/Elle/On</td>
                        <td class="col-2" id="3psConjFA" name="3psConjFA"></td>
                        <td class="col-3" ><input type="text" id="3psTesteFA" name="3ppTesteFA"></td>
                        <td class="col-4" id="3psResFA" name="3psResFA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjFA" name="1ppConjFA"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteFA" name="3ppTesteFA"></td>
                        <td class="col-4" id="1ppResFA" name="1ppResFA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjFA" name="2ppConjFA"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteFA" name="3ppTesteFA"></td>
                        <td class="col-4" id="2ppResFA" name="2ppResFA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjFA" name="3ppConjFA"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteFA" name="3ppTesteFA"></td>
                        <td class="col-4" id="3ppResFA" name="3ppResFA"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('FA')" id="btn_FA">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('FA')" id="conferirFA">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Subjonctif Présent</h2>
                <p>Le subjonctif présent est utilisé avec expressions que indiquent une subjectivité de la part du locuteur: <em>une nécessité, une obligation, un sentiment, un jugement, une appréciation, una volonté, un souhait, une possibilité</em>.</p>
                <ul>
                    <li>Les deux actions sont faites par des sujets différents.</li>                                
                </ul>
            </section>
        
            <section class="container_right">
                <h3>LE SUBJONCTIF PRÉSENT</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjSPR" name="1psConjSPR"></td>
                        <td class="col-3" ><input type="text" id="1psTesteSPR" name="3ppTesteSPR"></td>
                        <td class="col-4" id="1psResSPR" name="1psResSPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjSPR" name="2psConjSPR"></td>
                        <td class="col-3" ><input type="text" id="2psTesteSPR" name="3ppTesteSPR"></td>
                        <td class="col-4" id="2psResSPR" name="2psResSPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronSPR">Il/Elle/On</td>
                        <td class="col-2" id="3psConjSPR" name="3psConjSPR"></td>
                        <td class="col-3" ><input type="text" id="3psTesteSPR" name="3ppTesteSPR"></td>
                        <td class="col-4" id="3psResSPR" name="3psResSPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjSPR" name="1ppConjSPR"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteSPR" name="3ppTesteSPR"></td>
                        <td class="col-4" id="1ppResSPR" name="1ppResSPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjSPR" name="2ppConjSPR"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteSPR" name="3ppTesteSPR"></td>
                        <td class="col-4" id="2ppResSPR" name="2ppResSPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjSPR" name="3ppConjSPR"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteSPR" name="3ppTesteSPR"></td>
                        <td class="col-4" id="3ppResSPR" name="3ppResSPR"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('SPR')" id="btn_SPR">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('SPR')" id="conferirSPR">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Subjonctif passé</h2>
                <p>Le subjonctif passé est utilisé pour les mêmes expressions que pour le subjonctif présent quand l'action du verbe secondaire s'est déroulée avant l'action du verbe principal.</p>
                <ul>
                    <li>Quand les deux verbes ont le même sujet, on utilise l'infinitif.</li>
                </ul>        
            </section>

            <section class="container_right">
                <h3>LE SUBJONCTIF PASSÉ</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjSPA" name="1psConjSPA"></td>
                        <td class="col-3" ><input type="text" id="1psTesteSPA" name="3ppTesteSPA"></td>
                        <td class="col-4" id="1psResSPA" name="1psResSPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjSPA" name="2psConjSPA"></td>
                        <td class="col-3" ><input type="text" id="2psTesteSPA" name="3ppTesteSPA"></td>
                        <td class="col-4" id="2psResSPA" name="2psResSPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronSPA">Il/Elle/On</td>
                        <td class="col-2" id="3psConjSPA" name="3psConjSPA"></td>
                        <td class="col-3" ><input type="text" id="3psTesteSPA" name="3ppTesteSPA"></td>
                        <td class="col-4" id="3psResSPA" name="3psResSPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjSPA" name="1ppConjSPA"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteSPA" name="3ppTesteSPA"></td>
                        <td class="col-4" id="1ppResSPA" name="1ppResSPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjSPA" name="2ppConjSPA"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteSPA" name="3ppTesteSPA"></td>
                        <td class="col-4" id="2ppResSPA" name="2ppResSPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjSPA" name="3ppConjSPA"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteSPA" name="3ppTesteSPA"></td>
                        <td class="col-4" id="3ppResSPA" name="3ppResSPA"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('SPA')" id="btn_SPA">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('SPA')" id="conferirSPA">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>     
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Conditionnel Présent</h2>
                <p>Le conditionnel présent est utilisé pour:</p>
                <ul>
                    <li>Demander un service poliment;</li>
                    <li>exprimer un souhait, un désir;</li>
                    <li>faire une suggestion;</li>
                    <li>donner un conseil.</li>
                </ul>              
            </section>

            <section class="container_right">
                <h3>LE CONDITIONNEL PRÉSENT</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjCPR" name="1psConjCPR"></td>
                        <td class="col-3" ><input type="text" id="1psTesteCPR" name="3ppTesteCPR"></td>
                        <td class="col-4" id="1psResCPR" name="1psResCPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjCPR" name="2psConjCPR"></td>
                        <td class="col-3" ><input type="text" id="2psTesteCPR" name="3ppTesteCPR"></td>
                        <td class="col-4" id="2psResCPR" name="2psResCPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronCPR">Il/Elle/On</td>
                        <td class="col-2" id="3psConjCPR" name="3psConjCPR"></td>
                        <td class="col-3" ><input type="text" id="3psTesteCPR" name="3ppTesteCPR"></td>
                        <td class="col-4" id="3psResCPR" name="3psResCPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjCPR" name="1ppConjCPR"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteCPR" name="3ppTesteCPR"></td>
                        <td class="col-4" id="1ppResCPR" name="1ppResCPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjCPR" name="2ppConjCPR"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteCPR" name="3ppTesteCPR"></td>
                        <td class="col-4" id="2ppResCPR" name="2ppResCPR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjCPR" name="3ppConjCPR"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteCPR" name="3ppTesteCPR"></td>
                        <td class="col-4" id="3ppResCPR" name="3ppResCPR"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('CPR')" id="btn_CPR">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('CPR')" id="conferirCPR">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Conditionnel Passé</h2>
                <p>Le conditionnel passé est utilisé pour exprimer:</p>
                <ul>
                    <li>Un regret (avec les verbes aimer, préférer, souhaiter, vouloir);</li>
                    <li>un reproche (avec les verbes devoir, pouvoir et falloir);</li>
                    <li>phrases hypothétiques.</li>
                </ul>       
            </section>

            <section class="container_right">
                <h3>LE CONDITIONNEL PASSÉ</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjCPA" name="1psConjCPA"></td>
                        <td class="col-3" ><input type="text" id="1psTesteCPA" name="3ppTesteCPA"></td>
                        <td class="col-4" id="1psResCPA" name="1psResCPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjCPA" name="2psConjCPA"></td>
                        <td class="col-3" ><input type="text" id="2psTesteCPA" name="3ppTesteCPA"></td>
                        <td class="col-4" id="2psResCPA" name="2psResCPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronCPA">Il/Elle/On</td>
                        <td class="col-2" id="3psConjCPA" name="3psConjCPA"></td>
                        <td class="col-3" ><input type="text" id="3psTesteCPA" name="3ppTesteCPA"></td>
                        <td class="col-4" id="3psResCPA" name="3psResCPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjCPA" name="1ppConjCPA"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteCPA" name="3ppTesteCPA"></td>
                        <td class="col-4" id="1ppResCPA" name="1ppResCPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjCPA" name="2ppConjCPA"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteCPA" name="3ppTesteCPA"></td>
                        <td class="col-4" id="2ppResCPA" name="2ppResCPA"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjCPA" name="3ppConjCPA"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteCPA" name="3ppTesteCPA"></td>
                        <td class="col-4" id="3ppResCPA" name="3ppResCPA"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('CPA')" id="btn_CPA">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('CPA')" id="conferirCPA">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Impératif</h2>
                <p>L'impératif est utilisé pour exprimer:</p>
                <ul>
                    <li>Un ordre, une consigne;</li>
                    <li>un conseil;</li>
                    <li>un souhait.</li>
                </ul>      
            </section>

            <section class="container_right">
                <h3>LE IMPÉRATIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjIMP" name="1psConjIMP"></td>
                        <td class="col-3" ><input type="text" id="1psTesteIMP" name="3ppTesteIMP"></td>
                        <td class="col-4" id="1psResIMP" name="1psResIMP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjIMP" name="2psConjIMP"></td>
                        <td class="col-3" ><input type="text" id="2psTesteIMP" name="3ppTesteIMP"></td>
                        <td class="col-4" id="2psResIMP" name="2psResIMP"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronIMP">Il/Elle/On</td>
                        <td class="col-2" id="3psConjIMP" name="3psConjIMP"></td>
                        <td class="col-3" ><input type="text" id="3psTesteIMP" name="3ppTesteIMP"></td>
                        <td class="col-4" id="3psResIMP" name="3psResIMP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjIMP" name="1ppConjIMP"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteIMP" name="3ppTesteIMP"></td>
                        <td class="col-4" id="1ppResIMP" name="1ppResIMP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjIMP" name="2ppConjIMP"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteIMP" name="3ppTesteIMP"></td>
                        <td class="col-4" id="2ppResIMP" name="2ppResIMP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjIMP" name="3ppConjIMP"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteIMP" name="3ppTesteIMP"></td>
                        <td class="col-4" id="3ppResIMP" name="3ppResIMP"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('IMP')" id="btn_IMP">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('IMP')" id="conferirIMP">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Présent progressif</h2>
                <p>Le présent progressif est parfois utilisé à la place du présent simple pour parler d'une action qui se passe au moment présent.</p>
                <ul>
                    <li>Il est souvent utilisé pour dire qu'on ne peut pas faire quelque chose car on est occupé.</li>
                    <li>Formation: <b>Verbe être au présent + en train de + infinitif</b></li>
                </ul>     
            </section>

            <section class="container_right">
                <h3>LE PRÉSENT PROGRESSIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjPRP" name="1psConjPRP"></td>
                        <td class="col-3" ><input type="text" id="1psTestePRP" name="3ppTestePRP"></td>
                        <td class="col-4" id="1psResPRP" name="1psResPRP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjPRP" name="2psConjPRP"></td>
                        <td class="col-3" ><input type="text" id="2psTestePRP" name="3ppTestePRP"></td>
                        <td class="col-4" id="2psResPRP" name="2psResPRP"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronPRP">Il/Elle/On</td>
                        <td class="col-2" id="3psConjPRP" name="3psConjPRP"></td>
                        <td class="col-3" ><input type="text" id="3psTestePRP" name="3ppTestePRP"></td>
                        <td class="col-4" id="3psResPRP" name="3psResPRP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjPRP" name="1ppConjPRP"></td>
                        <td class="col-3" ><input type="text" id="1ppTestePRP" name="3ppTestePRP"></td>
                        <td class="col-4" id="1ppResPRP" name="1ppResPRP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjPRP" name="2ppConjPRP"></td>
                        <td class="col-3" ><input type="text" id="2ppTestePRP" name="3ppTestePRP"></td>
                        <td class="col-4" id="2ppResPRP" name="2ppResPRP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjPRP" name="3ppConjPRP"></td>
                        <td class="col-3" ><input type="text" id="3ppTestePRP" name="3ppTestePRP"></td>
                        <td class="col-4" id="3ppResPRP" name="3ppResPRP"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('PRP')" id="btn_PRP">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('PRP')" id="conferirPRP">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Passé récent</h2>
                <p>Le passé récent est utilisé pour:</p>
                <ul>
                    <li>Le passé récent est utilisé pour exprimer une action qui s'est passée très peu de temps avant le moment où l'on parle;</li>
                    <li>Il formé du: <b>verbe venir au présent + de + verbe à l'infinitif.</b> </li>
                    <li>"Venir + juste + de": <em>juste</em> insiste sur la proximité avec le moment présent.</li>
                </ul>   
            </section>

            <section class="container_right">
                <h3>LE PASSÉ RÉCENT</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjPAR" name="1psConjPAR"></td>
                        <td class="col-3" ><input type="text" id="1psTestePAR" name="3ppTestePAR"></td>
                        <td class="col-4" id="1psResPAR" name="1psResPAR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjPAR" name="2psConjPAR"></td>
                        <td class="col-3" ><input type="text" id="2psTestePAR" name="3ppTestePAR"></td>
                        <td class="col-4" id="2psResPAR" name="2psResPAR"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronPAR">Il/Elle/On</td>
                        <td class="col-2" id="3psConjPAR" name="3psConjPAR"></td>
                        <td class="col-3" ><input type="text" id="3psTestePAR" name="3ppTestePAR"></td>
                        <td class="col-4" id="3psResPAR" name="3psResPAR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjPAR" name="1ppConjPAR"></td>
                        <td class="col-3" ><input type="text" id="1ppTestePAR" name="3ppTestePAR"></td>
                        <td class="col-4" id="1ppResPAR" name="1ppResPAR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjPAR" name="2ppConjPAR"></td>
                        <td class="col-3" ><input type="text" id="2ppTestePAR" name="3ppTestePAR"></td>
                        <td class="col-4" id="2ppResPAR" name="2ppResPAR"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjPAR" name="3ppConjPAR"></td>
                        <td class="col-3" ><input type="text" id="3ppTestePAR" name="3ppTestePAR"></td>
                        <td class="col-4" id="3ppResPAR" name="3ppResPAR"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('PAR')" id="btn_PAR">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('PAR')" id="conferirPAR">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Futur proche</h2>
                <p>Le futur proche est utilisé pour:</p>
                <ul>
                    <li>Exprimer un projet;</li>
                    <li>exprimer un événement immédiat;</li>
                    <li>Le futur proche est formé du: <b>verbe aller conjugué au présent + verbe à l'infinitif</b>.</li>
                </ul>
            </section>

            <section class="container_right">                
                <h3>LE FUTUR PROCHE</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjFUP" name="1psConjFUP"></td>
                        <td class="col-3" ><input type="text" id="1psTesteFUP" name="3ppTesteFUP"></td>
                        <td class="col-4" id="1psResFUP" name="1psResFUP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjFUP" name="2psConjFUP"></td>
                        <td class="col-3" ><input type="text" id="2psTesteFUP" name="3ppTesteFUP"></td>
                        <td class="col-4" id="2psResFUP" name="2psResFUP"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronFUP">Il/Elle/On</td>
                        <td class="col-2" id="3psConjFUP" name="3psConjFUP"></td>
                        <td class="col-3" ><input type="text" id="3psTesteFUP" name="3ppTesteFUP"></td>
                        <td class="col-4" id="3psResFUP" name="3psResFUP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjFUP" name="1ppConjFUP"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteFUP" name="3ppTesteFUP"></td>
                        <td class="col-4" id="1ppResFUP" name="1ppResFUP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjFUP" name="2ppConjFUP"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteFUP" name="3ppTesteFUP"></td>
                        <td class="col-4" id="2ppResFUP" name="2ppResFUP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjFUP" name="3ppConjFUP"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteFUP" name="3ppTesteFUP"></td>
                        <td class="col-4" id="3ppResFUP" name="3ppResFUP"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('FUP')" id="btn_FUP">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('FUP')" id="conferirFUP">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Gérondif</h2>
                <p>Le gérondif est utilisé pour indiquer que deux actions sont faite en même temps par un même sujet. </p>
                <p>Le gérondif peut apporter une précision: <em>de temps, de manière ou de condition.</em></p>
                <p>Le gérondif est formé <b>de la préposition "en" + du participe présent du verbe</b>.</p>
            </section>


            <section class="container_right">
                <h3>LE GÉRONDIF</h3>   
                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjGER" name="1psConjGER"></td>
                        <td class="col-3" ><input type="text" id="1psTesteGER" name="3ppTesteGER"></td>
                        <td class="col-4" id="1psResGER" name="1psResGER"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjGER" name="2psConjGER"></td>
                        <td class="col-3" ><input type="text" id="2psTesteGER" name="3ppTesteGER"></td>
                        <td class="col-4" id="2psResGER" name="2psResGER"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronGER">Il/Elle/On</td>
                        <td class="col-2" id="3psConjGER" name="3psConjGER"></td>
                        <td class="col-3" ><input type="text" id="3psTesteGER" name="3ppTesteGER"></td>
                        <td class="col-4" id="3psResGER" name="3psResGER"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjGER" name="1ppConjGER"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteGER" name="3ppTesteGER"></td>
                        <td class="col-4" id="1ppResGER" name="1ppResGER"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjGER" name="2ppConjGER"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteGER" name="3ppTesteGER"></td>
                        <td class="col-4" id="2ppResGER" name="2ppResGER"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjGER" name="3ppConjGER"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteGER" name="3ppTesteGER"></td>
                        <td class="col-4" id="3ppResGER" name="3ppResGER"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('GER')" id="btn_GER">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('GER')" id="conferirGER">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="container_back">
            <section class="container_left">
                <h2>Forme passive</h2>
                <p>Le forme passive et la forme active expriment deux points de vue diffèrents d'une même action.</p>
                <ul>
                    <li>Avec la forme active, l'information donnée porte sur le sujet de l'action;</li>
                    <li>avec la forme passive, on ne s'intéresse pas prioritairement au sujet de l'action.</li>
                    <li>Le passif existe à tous les temps et il est formé de:<b> l'auxiliaire être + participe passé</b>. C'est l'auxiliaire être qui indique le temps du verbe.</li>                        
                </ul>
            </section>

            <section class="container_right">
                <h3>LA FORME PASSIVE</h3> 

                <select class="tensePassiveVoice" id="select">

                  <option value="PI">Présent</option>
                  <option value="PAC">Passé composé</option>
                  <option value="IM">Imparfait</option>
                  <option value="FS">Futur simple</option>
                  <option value="FUP">Futur proche</option>
                  <option value="PAR">Passé récent</option>
                </select>

                <button class="tensePassiveVoice" id="btn_tense_FVP">Choisir le temps de verbe</button>

                <table>
                    <tr class="table_head">
                        <td class="col-1">SUJET</td>
                        <td class="col-2">CONJUGAISON</td>
                        <td class="col-3">TEST</td>
                        <td class="col-4">RÉSULTAT</td>
                    </tr>
                    <tr>
                        <td class="col-1">Je (J')</td>
                        <td class="col-2" id="1psConjFVP" name="1psConjFVP"></td>
                        <td class="col-3" ><input type="text" id="1psTesteFVP" name="3ppTesteFVP"></td>
                        <td class="col-4" id="1psResFVP" name="1psResFVP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Tu</td>
                        <td class="col-2" id="2psConjFVP" name="2psConjFVP"></td>
                        <td class="col-3" ><input type="text" id="2psTesteFVP" name="3ppTesteFVP"></td>
                        <td class="col-4" id="2psResFVP" name="2psResFVP"></td>
                    </tr>
                    <tr>
                        <td class="col-1" id="pronFVP">Il/Elle/On</td>
                        <td class="col-2" id="3psConjFVP" name="3psConjFVP"></td>
                        <td class="col-3" ><input type="text" id="3psTesteFVP" name="3ppTesteFVP"></td>
                        <td class="col-4" id="3psResFVP" name="3psResFVP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Nous</td>
                        <td class="col-2" id="1ppConjFVP" name="1ppConjFVP"></td>
                        <td class="col-3" ><input type="text" id="1ppTesteFVP" name="3ppTesteFVP"></td>
                        <td class="col-4" id="1ppResFVP" name="1ppResFVP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Vous</td>
                        <td class="col-2" id="2ppConjFVP" name="2ppConjFVP"></td>
                        <td class="col-3" ><input type="text" id="2ppTesteFVP" name="3ppTesteFVP"></td>
                        <td class="col-4" id="2ppResFVP" name="2ppResFVP"></td>
                    </tr>
                    <tr>
                        <td class="col-1">Ils/Elles</td>
                        <td class="col-2" id="3ppConjFVP" name="3ppConjFVP"></td>
                        <td class="col-3" ><input type="text" id="3ppTesteFVP" name="3ppTesteFVP"></td>
                        <td class="col-4" id="3ppResFVP" name="3ppResFVP"></td>
                    </tr>
                    <tr>
                        <td class="empty_cell"></td>
                        <td><button class="btn btn-mostrar" onclick="ocultarResposta('FVP')" id="btn_FVP">MASQUER</button></td>
                        <td><button class="btn" onclick="conferir('FVP')" id="conferirFVP">CONFÉRER</button></td>
                        <td class="empty_cell"></td>
                    </tr>
                </table>
            </section>
        </div>
        
        
        <div class="footer">
            <div id="footer_left">
                <h3>EDER TOLENTINO </h3>
                <p>Développeur Web Jr</p>
            </div>
            <div id="footer_center">
                <ul>
                    <li><a href="https://edertolentino.com/portfolio/aboutme.php" target="_blank">À PROPOS</a></li>
                    <li><a href="https://edertolentino.com/portfolio/portfolio.php" target="_blank">PORTFOLIO</a></li>
                    <li><a href="https://edertolentino.com/portfolio/contacts.php" target="_blank">CONTACT</a></li>
                </ul>
            </div>
            <div id="footer_right">
                <ul>
                    <li>
                        <a href="https://web.whatsapp.com/send?phone=351910116613" class="fa fa-whatsapp" target="_blank"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/edertolentino/" class="fa fa-linkedin" target="_blank"></a>
                    </li>
                    <li>
                        <a href="https://github.com/EderTolentino" class="fa fa-github" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div id="footer_bottom">
                <p><b>"On ne voit bien qu’avec le cœur. L’essentiel est invisible pour les yeux."</b> <br>
                    Le Petit Prince, Antoine de Saint-Exupéry, 1943</p>

                <a href="#" class="btn_toTop"></a>
            </div>
        </div>

        <script src="file.js"></script>
        
         
    </body>
</html>