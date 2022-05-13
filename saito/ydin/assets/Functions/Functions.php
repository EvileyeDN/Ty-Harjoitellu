<!--<p>Haku button</p>-->
<?php
Function vivodTest() 
{ ?>
       <button  class="btn btn-outline-primary btn-lg me-3 ms-3" data-bs-toggle="modal" data-bs-target="#search">
           <i class="fa fa-search"></i>
       </button>
    <div class="modal fade" id="search" tabindex="-1" aria-labelledby="SearchLable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="SearchLable">Haku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?act=search" method="post" id="search" class="d-flex" >
                        <div class="input-group">
                            <div class="form-outline col-sm">
                                <input type="text" name="search" id="search1" class="form-control" placeholder="Yhtiö" autocomplete="off"/>

                            </div>
                            <div class="form-outline col-sm-3">
                                <select class="form-select" aria-label="Työ Ala" name="search2" id="search2" type="search2">
                                    <option value="Ajoneuvoalan ammattitutkinto">Ajoneuvoalan ammattitutkinto</option>
                                    <option value="Ammatilliseen koulutukseen valmentava koulutus (VALMA)">Ammatilliseen koulutukseen valmentava koulutus (VALMA)</option>
									<option value="Autoalan perustutkinto">Autoalan perustutkinto</option>
									<option value="Baarimestarin erikoisammattitutkinto">Baarimestarin erikoisammattitutkinto</option>
									<option value="Ei-tutkintotavoitteinen koulutus">Ei-tutkintotavoitteinen koulutus</option>
									<option value="Elintarvikealan perustutkinto">Elintarvikealan perustutkinto</option>
									<option value="Hieronnan ammattitutkinto">Hieronnan ammattitutkinto</option>
									<option value="Hius- ja kauneudenhoitoalan perustutkinto">Hius- ja kauneudenhoitoalan perustutkinto</option>
									<option value="Hiusalan perustutkinto">Hiusalan perustutkinto</option>
									<option value="Hotelli-, ravintola- ja catering-alan perustutkinto">Hotelli-, ravintola- ja catering-alan perustutkinto</option>
									<option value="Isännöinnin ammattitutkinto">Isännöinnin ammattitutkinto</option>
									<option value="Käsi- ja taideteollisuusalan perustutkinto">Käsi- ja taideteollisuusalan perustutkinto</option>
									<option value="Kasvatus- ja ohjausalan ammattitutkinto">Kasvatus- ja ohjausalan ammattitutkinto</option>
									<option value="Kasvatus- ja ohjausalan perustutkinto">Kasvatus- ja ohjausalan perustutkinto</option>
									<option value="Kauneudenhoitoalan perustutkinto">Kauneudenhoitoalan perustutkinto</option>
									<option value="Kehitysvamma-alan ammattitutkinto">Kehitysvamma-alan ammattitutkinto</option>
									<option value="Kone- ja metallialan perustutkinto">Kone- ja metallialan perustutkinto</option>
									<option value="Kone- ja tuotantotekniikan perustutkinto">Kone- ja tuotantotekniikan perustutkinto</option>
									<option value="Kuntoutus-, tuki- ja ohjauspalvelujen erikoisammattitutkinto">Kuntoutus-, tuki- ja ohjauspalvelujen erikoisammattitutkinto</option>
									<option value="Kuvallisen ilmaisun perustutkinto">Kuvallisen ilmaisun perustutkinto</option>
									<option value="Laboratorioalan perustutkinto">Laboratorioalan perustutkinto</option>
									<option value="Lähiesimiestyön ammattitutkinto">Lähiesimiestyön ammattitutkinto</option>
									<option value="Leipomoalan ammattitutkinto">Leipomoalan ammattitutkinto</option>
									<option value="Liikenneopettajan erikoisammattitutkinto">Liikenneopettajan erikoisammattitutkinto</option>
									<option value="Liiketalouden perustutkinto">Liiketalouden perustutkinto</option>
									<option value="Liiketoiminnan ammattitutkinto">Liiketoiminnan ammattitutkinto</option>
									<option value="Liiketoiminnan perustutkinto">Liiketoiminnan perustutkinto</option>
									<option value="Logistiikan perustutkinto">Logistiikan perustutkinto</option>
									<option value="Luontoalan ammattitutkinto">Luontoalan ammattitutkinto</option>
									<option value="Majoitus- ja ravitsemisalan esimiestyön erikoisammattitutkinto">Majoitus- ja ravitsemisalan esimiestyön erikoisammattitutkinto</option>
									<option value="atkailualan perustutkinto">atkailualan perustutkinto</option>
									<option value="Matkailupalvelujen ammattitutkinto">Matkailupalvelujen ammattitutkinto</option>
									<option value="Media-alan ammattitutkinto">Media-alan ammattitutkinto</option>
									<option value="Media-alan erikoisammattitutkinto">Media-alan erikoisammattitutkinto</option>
									<option value="Media-alan ja kuvallisen ilmaisun perustutkinto">Media-alan ja kuvallisen ilmaisun perustutkinto</option>
									<option value="Media-alan perustutkinto">Media-alan perustutkinto</option>
									<option value="Metsäalan ammattitutkinto">Metsäalan ammattitutkinto</option>
									<option value="Metsäalan perustutkinto">Metsäalan perustutkinto</option>
									<option value="Mielenterveys- ja päihdetyön ammattitutkinto">Mielenterveys- ja päihdetyön ammattitutkinto</option>
									<option value="Mielenterveys- ja päihdetyön erikoisammattitutkinto">Mielenterveys- ja päihdetyön erikoisammattitutkinto</option>
									<option value="Musiikkialan perustutkinto">Musiikkialan perustutkinto</option>
									<option value="Myynnin ammattitutkinto">Myynnin ammattitutkinto</option>
									<option value="Nuoriso- ja vapaa-ajanohjauksen perustutkinto">Nuoriso- ja vapaa-ajanohjauksen perustutkinto</option>
									<option value="Palvelulogistiikan ammattitutkinto">Palvelulogistiikan ammattitutkinto</option>
									<option value="Palvelulogistiikan erikoisammattitutkinto">Palvelulogistiikan erikoisammattitutkinto</option>
									<option value="Pintakäsittelyalan ammattitutkinto">Pintakäsittelyalan ammattitutkinto</option>
									<option value="Pintakäsittelyalan perustutkinto">Pintakäsittelyalan perustutkinto</option>
									<option value="Puhevammaisten tulkkauksen erikoisammattitutkinto">Puhevammaisten tulkkauksen erikoisammattitutkinto</option>
									<option value="Puhtaus- ja kiinteistöpalvelualan ammattitutkinto">Puhtaus- ja kiinteistöpalvelualan ammattitutkinto</option>
									<option value="Puhtaus- ja kiinteistöpalvelualan erikoisammattitutkinto">Puhtaus- ja kiinteistöpalvelualan erikoisammattitutkinto</option>
									<option value="Puhtaus- ja kiinteistöpalvelualan perustutkinto">Puhtaus- ja kiinteistöpalvelualan perustutkinto</option>
									<option value="Puutarha-alan ammattitutkinto">Puutarha-alan ammattitutkinto</option>
									<option value="Puutarha-alan perustutkinto">Puutarha-alan perustutkinto</option>
									<option value="Puutarhatalouden perustutkinto">Puutarhatalouden perustutkinto</option>
									<option value="Puuteollisuuden ammattitutkinto">Puuteollisuuden ammattitutkinto</option>
									<option value="Puuteollisuuden perustutkinto">Puuteollisuuden perustutkinto</option>
									<option value="Rakennusalan perustutkinto">Rakennusalan perustutkinto</option>
									<option value="Rakennusalan työmaajohdon erikoisammattitutkinto">Rakennusalan työmaajohdon erikoisammattitutkinto</option>
									<option value="Rakennustuotannon erikoisammattitutkinto">Rakennustuotannon erikoisammattitutkinto</option>
									<option value="Ravintola- ja catering-alan perustutkinto">Ravintola- ja catering-alan perustutkinto</option>
									<option value="Ravintolan asiakaspalvelun ammattitutkinto">Ravintolan asiakaspalvelun ammattitutkinto</option>
									<option value="Ruokapalvelujen ammattitutkinto">Ruokapalvelujen ammattitutkinto</option>
									<option value="Sähkö- ja automaatioalan perustutkinto">Sähkö- ja automaatioalan perustutkinto</option>
									<option value="Sähkö- ja automaatiotekniikan perustutkinto">Sähkö- ja automaatiotekniikan perustutkinto</option>
									<option value="Sosiaali- ja terveysalan perustutkinto">Sosiaali- ja terveysalan perustutkinto</option>
									<option value="Taideteollisuusalan ammattitutkinto">Taideteollisuusalan ammattitutkinto</option>
									<option value="Taideteollisuusalan perustutkinto">Taideteollisuusalan perustutkinto</option>
									<option value="Talonrakennusalan ammattitutkinto">Talonrakennusalan ammattitutkinto</option>
									<option value="Talotekniikan perustutkinto">Talotekniikan perustutkinto</option>
									<option value="Tekstiili- ja muotialan ammattitutkinto">Tekstiili- ja muotialan ammattitutkinto</option>
									<option value="Tekstiili- ja muotialan perustutkinto">Tekstiili- ja muotialan perustutkinto</option>
									<option value="Tekstiili- ja vaatetusalan perustutkinto">Tekstiili- ja vaatetusalan perustutkinto</option>
									<option value="Terveysalan ammattitutkinto">Terveysalan ammattitutkinto</option>
									<option value="Tieto- ja tietoliikennetekniikan perustutkinto">Tieto- ja tietoliikennetekniikan perustutkinto</option>
									<option value="Tieto- ja viestintätekniikan perustutkinto">Tieto- ja viestintätekniikan perustutkinto</option>
									<option value="Tuotannon esimiestyön erikoisammattitutkinto">Tuotannon esimiestyön erikoisammattitutkinto</option>
									<option value="Turvallisuusalan ammattitutkinto">Turvallisuusalan ammattitutkinto</option>
									<option value="Turvallisuusalan perustutkinto">Turvallisuusalan perustutkinto</option>
									<option value="Välinehuoltoalan perustutkinto">Välinehuoltoalan perustutkinto</option>
									<option value="Vammaisalan ammattitutkinto">Vammaisalan ammattitutkinto</option>
									<option value="Yrittäjän ammattitutkinto">Yrittäjän ammattitutkinto</option>
									<option value="Yrittäjyyden ammattitutkinto">Yrittäjyyden ammattitutkinto</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="knopka">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <ul class="display list-group"></ul>
                </div>
            </div>
        </div>
    </div>
	<?php
}

// Registration button
Function RegaButton()
{?>
	 <?php  function KirjaiduUlos3(){if(!isset($_COOKIE['AsiakasNimi'])){?>
            <button type="button" class="btn btn-outline-primary btn-lg me-3" data-bs-toggle="modal" data-bs-target="#Registrointi" name="kirjaiduulos3" id="kirjaiduulos3">
                Rekisteröinti
            </button><?php } }?>
<!--<p>Модальное окно регистрации</p>-->
    <div class="modal fade" id="Registrointi" tabindex="-1" aria-labelledby="Registrointilable" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Registrointilable">Rekisteröinti</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?act=rega" method="post" >
                        <div class="row mb-2">
                            <label for=inputlogin"" class="col-sm-2 col-form-label">Tunnus</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputlogin" name="username" type="login">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputemail"" class="col-sm-2 col-form-label">sähköposti</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputemail" name="email" type="email">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputName"" class="col-sm-2 col-form-label">Nimi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputName" name="name" type="name">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputSurName"" class="col-sm-2 col-form-label">Sukunimi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputSurName" name="surname" type="surname">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputWork"" class="col-sm-2 col-form-label">Työ Ala</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Työ Ala" name="work" type="work">
                                    <option value="Ajoneuvoalan ammattitutkinto">Ajoneuvoalan ammattitutkinto</option>
                                    <option value="Ammatilliseen koulutukseen valmentava koulutus (VALMA)">Ammatilliseen koulutukseen valmentava koulutus (VALMA)</option>
									<option value="Autoalan perustutkinto">Autoalan perustutkinto</option>
									<option value="Baarimestarin erikoisammattitutkinto">Baarimestarin erikoisammattitutkinto</option>
									<option value="Ei-tutkintotavoitteinen koulutus">Ei-tutkintotavoitteinen koulutus</option>
									<option value="Elintarvikealan perustutkinto">Elintarvikealan perustutkinto</option>
									<option value="Hieronnan ammattitutkinto">Hieronnan ammattitutkinto</option>
									<option value="Hius- ja kauneudenhoitoalan perustutkinto">Hius- ja kauneudenhoitoalan perustutkinto</option>
									<option value="Hiusalan perustutkinto">Hiusalan perustutkinto</option>
									<option value="Hotelli-, ravintola- ja catering-alan perustutkinto">Hotelli-, ravintola- ja catering-alan perustutkinto</option>
									<option value="Isännöinnin ammattitutkinto">Isännöinnin ammattitutkinto</option>
									<option value="Käsi- ja taideteollisuusalan perustutkinto">Käsi- ja taideteollisuusalan perustutkinto</option>
									<option value="Kasvatus- ja ohjausalan ammattitutkinto">Kasvatus- ja ohjausalan ammattitutkinto</option>
									<option value="Kasvatus- ja ohjausalan perustutkinto">Kasvatus- ja ohjausalan perustutkinto</option>
									<option value="Kauneudenhoitoalan perustutkinto">Kauneudenhoitoalan perustutkinto</option>
									<option value="Kehitysvamma-alan ammattitutkinto">Kehitysvamma-alan ammattitutkinto</option>
									<option value="Kone- ja metallialan perustutkinto">Kone- ja metallialan perustutkinto</option>
									<option value="Kone- ja tuotantotekniikan perustutkinto">Kone- ja tuotantotekniikan perustutkinto</option>
									<option value="Kuntoutus-, tuki- ja ohjauspalvelujen erikoisammattitutkinto">Kuntoutus-, tuki- ja ohjauspalvelujen erikoisammattitutkinto</option>
									<option value="Kuvallisen ilmaisun perustutkinto">Kuvallisen ilmaisun perustutkinto</option>
									<option value="Laboratorioalan perustutkinto">Laboratorioalan perustutkinto</option>
									<option value="Lähiesimiestyön ammattitutkinto">Lähiesimiestyön ammattitutkinto</option>
									<option value="Leipomoalan ammattitutkinto">Leipomoalan ammattitutkinto</option>
									<option value="Liikenneopettajan erikoisammattitutkinto">Liikenneopettajan erikoisammattitutkinto</option>
									<option value="Liiketalouden perustutkinto">Liiketalouden perustutkinto</option>
									<option value="Liiketoiminnan ammattitutkinto">Liiketoiminnan ammattitutkinto</option>
									<option value="Liiketoiminnan perustutkinto">Liiketoiminnan perustutkinto</option>
									<option value="Logistiikan perustutkinto">Logistiikan perustutkinto</option>
									<option value="Luontoalan ammattitutkinto">Luontoalan ammattitutkinto</option>
									<option value="Majoitus- ja ravitsemisalan esimiestyön erikoisammattitutkinto">Majoitus- ja ravitsemisalan esimiestyön erikoisammattitutkinto</option>
									<option value="atkailualan perustutkinto">atkailualan perustutkinto</option>
									<option value="Matkailupalvelujen ammattitutkinto">Matkailupalvelujen ammattitutkinto</option>
									<option value="Media-alan ammattitutkinto">Media-alan ammattitutkinto</option>
									<option value="Media-alan erikoisammattitutkinto">Media-alan erikoisammattitutkinto</option>
									<option value="Media-alan ja kuvallisen ilmaisun perustutkinto">Media-alan ja kuvallisen ilmaisun perustutkinto</option>
									<option value="Media-alan perustutkinto">Media-alan perustutkinto</option>
									<option value="Metsäalan ammattitutkinto">Metsäalan ammattitutkinto</option>
									<option value="Metsäalan perustutkinto">Metsäalan perustutkinto</option>
									<option value="Mielenterveys- ja päihdetyön ammattitutkinto">Mielenterveys- ja päihdetyön ammattitutkinto</option>
									<option value="Mielenterveys- ja päihdetyön erikoisammattitutkinto">Mielenterveys- ja päihdetyön erikoisammattitutkinto</option>
									<option value="Musiikkialan perustutkinto">Musiikkialan perustutkinto</option>
									<option value="Myynnin ammattitutkinto">Myynnin ammattitutkinto</option>
									<option value="Nuoriso- ja vapaa-ajanohjauksen perustutkinto">Nuoriso- ja vapaa-ajanohjauksen perustutkinto</option>
									<option value="Palvelulogistiikan ammattitutkinto">Palvelulogistiikan ammattitutkinto</option>
									<option value="Palvelulogistiikan erikoisammattitutkinto">Palvelulogistiikan erikoisammattitutkinto</option>
									<option value="Pintakäsittelyalan ammattitutkinto">Pintakäsittelyalan ammattitutkinto</option>
									<option value="Pintakäsittelyalan perustutkinto">Pintakäsittelyalan perustutkinto</option>
									<option value="Puhevammaisten tulkkauksen erikoisammattitutkinto">Puhevammaisten tulkkauksen erikoisammattitutkinto</option>
									<option value="Puhtaus- ja kiinteistöpalvelualan ammattitutkinto">Puhtaus- ja kiinteistöpalvelualan ammattitutkinto</option>
									<option value="Puhtaus- ja kiinteistöpalvelualan erikoisammattitutkinto">Puhtaus- ja kiinteistöpalvelualan erikoisammattitutkinto</option>
									<option value="Puhtaus- ja kiinteistöpalvelualan perustutkinto">Puhtaus- ja kiinteistöpalvelualan perustutkinto</option>
									<option value="Puutarha-alan ammattitutkinto">Puutarha-alan ammattitutkinto</option>
									<option value="Puutarha-alan perustutkinto">Puutarha-alan perustutkinto</option>
									<option value="Puutarhatalouden perustutkinto">Puutarhatalouden perustutkinto</option>
									<option value="Puuteollisuuden ammattitutkinto">Puuteollisuuden ammattitutkinto</option>
									<option value="Puuteollisuuden perustutkinto">Puuteollisuuden perustutkinto</option>
									<option value="Rakennusalan perustutkinto">Rakennusalan perustutkinto</option>
									<option value="Rakennusalan työmaajohdon erikoisammattitutkinto">Rakennusalan työmaajohdon erikoisammattitutkinto</option>
									<option value="Rakennustuotannon erikoisammattitutkinto">Rakennustuotannon erikoisammattitutkinto</option>
									<option value="Ravintola- ja catering-alan perustutkinto">Ravintola- ja catering-alan perustutkinto</option>
									<option value="Ravintolan asiakaspalvelun ammattitutkinto">Ravintolan asiakaspalvelun ammattitutkinto</option>
									<option value="Ruokapalvelujen ammattitutkinto">Ruokapalvelujen ammattitutkinto</option>
									<option value="Sähkö- ja automaatioalan perustutkinto">Sähkö- ja automaatioalan perustutkinto</option>
									<option value="Sähkö- ja automaatiotekniikan perustutkinto">Sähkö- ja automaatiotekniikan perustutkinto</option>
									<option value="Sosiaali- ja terveysalan perustutkinto">Sosiaali- ja terveysalan perustutkinto</option>
									<option value="Taideteollisuusalan ammattitutkinto">Taideteollisuusalan ammattitutkinto</option>
									<option value="Taideteollisuusalan perustutkinto">Taideteollisuusalan perustutkinto</option>
									<option value="Talonrakennusalan ammattitutkinto">Talonrakennusalan ammattitutkinto</option>
									<option value="Talotekniikan perustutkinto">Talotekniikan perustutkinto</option>
									<option value="Tekstiili- ja muotialan ammattitutkinto">Tekstiili- ja muotialan ammattitutkinto</option>
									<option value="Tekstiili- ja muotialan perustutkinto">Tekstiili- ja muotialan perustutkinto</option>
									<option value="Tekstiili- ja vaatetusalan perustutkinto">Tekstiili- ja vaatetusalan perustutkinto</option>
									<option value="Terveysalan ammattitutkinto">Terveysalan ammattitutkinto</option>
									<option value="Tieto- ja tietoliikennetekniikan perustutkinto">Tieto- ja tietoliikennetekniikan perustutkinto</option>
									<option value="Tieto- ja viestintätekniikan perustutkinto">Tieto- ja viestintätekniikan perustutkinto</option>
									<option value="Tuotannon esimiestyön erikoisammattitutkinto">Tuotannon esimiestyön erikoisammattitutkinto</option>
									<option value="Turvallisuusalan ammattitutkinto">Turvallisuusalan ammattitutkinto</option>
									<option value="Turvallisuusalan perustutkinto">Turvallisuusalan perustutkinto</option>
									<option value="Välinehuoltoalan perustutkinto">Välinehuoltoalan perustutkinto</option>
									<option value="Vammaisalan ammattitutkinto">Vammaisalan ammattitutkinto</option>
									<option value="Yrittäjän ammattitutkinto">Yrittäjän ammattitutkinto</option>
									<option value="Yrittäjyyden ammattitutkinto">Yrittäjyyden ammattitutkinto</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputPassword"" class="col-sm-2 col-form-label">Salasana</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputPassword" name="password" type="password">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputConfirmPassword"" class="col-sm-2 col-form-label">Tarkista salasana</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputConfirmPassword" name="confpassword" type="password">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input  class="knopka" name="submit" type="submit" value="Registrointi" >
                </div>
                </form>
            </div>
        </div>
    </div>
	
	
<?php
}
Class login
{
	// Login button
public Function LoginButton()
{?>
  <?php function KirjaiduUlos2(){if(!isset($_COOKIE['AsiakasNimi'])){?>
            <button type="button" class="btn btn-outline-primary btn-lg me-3" data-bs-toggle="modal" data-bs-target="#exampleModal" name="kirjaiduulos2" id="kirjaiduulos2">
                Kirjaudu Sisään
            </button> <?php } }?>
<!--<p>Modal ikkuna button</p>-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kirjaudu Sisään</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?act=login" method="post" >
                        <div class="row mb-2">
                            <label for=inputemail"" class="col-sm-2 col-form-label">Sähköposti</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputemail" name="email" type="email">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for=inputPassword"" class="col-sm-2 col-form-label">Salasana</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputPassword" name="password" type="password">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input id="LoginButton" class="knopka" name="submit" type="submit" value="Kirjaidu Sisään" >
                </div>
                </form>
            </div>
        </div>
    </div>


<?php
}
}

// Logo Gradia
function logo()
{?>
<svg class="ms-3" width="150px" height="27px" viewBox="0 0 150 27" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <polygon id="path-1" points="0 26.9998541 0 3.30994557e-05 27.1848077 3.30994557e-05 27.1848077 26.9998541"></polygon>
    </defs>
    <g id="Symbols" stroke="none" stroke-width="1" fill-rule="evenodd">
        <g id="mobile-header" transform="translate(-20.000000, -18.000000)">
            <g id="gradia-logo-black" transform="translate(20.000000, 18.000000)">
                <g>
                    <path d="M26.4301619,12.7434892 L13.5850209,12.7434892 C13.1697728,12.7434892 12.8329462,13.0778878 12.8329462,13.49055 L12.8329462,16.6738135 C11.1594654,16.2848676 10.085624,14.7283541 10.3401723,12.9998068 C10.532461,11.6945027 11.5363291,10.6083 12.8320279,10.3191446 C13.9683126,10.0657459 15.1148821,10.3966784 15.9145239,11.1913541 C16.0511645,11.3272662 16.2465754,11.4051649 16.4506181,11.4051649 C16.6544771,11.4051649 16.849888,11.3272662 16.986345,11.1913541 L23.2023934,5.01656351 C23.4955097,4.72540135 23.4956934,4.24815811 23.2027607,3.95699595 C20.433216,1.20482027 16.7459382,-0.194071622 12.8178864,0.0217459459 C9.48029113,0.203995946 6.35059541,1.57442838 4.00548159,3.88073919 C1.66073508,6.1865027 0.248965173,9.28146892 0.0302299111,12.5953541 C-0.218808725,16.3691514 1.07486985,19.9652595 3.67324642,22.7209014 C6.2370955,25.4404216 9.85182886,26.9998541 13.5907142,26.9998541 C21.0835448,26.9998541 27.1840731,20.9416378 27.1848077,13.4974824 C27.1848077,13.0831784 26.8472465,12.7434892 26.4301619,12.7434892 M14.3484822,25.4710703 L14.3484822,14.2491041 L25.6457636,14.2491041 C25.4633924,17.1393811 24.2092001,19.8767797 22.1116556,21.9603405 C20.0141112,24.0437189 17.2583407,25.28955 14.3484822,25.4710703 M8.78753764,13.5002189 C8.78753764,15.827327 10.5241964,17.8474014 12.8327626,18.2119014 L12.8327626,25.4710703 C9.75908217,25.2818878 6.90781018,23.9572459 4.80053192,21.7374081 C2.68241792,19.5062595 1.51582986,16.5811378 1.51582986,13.5002189 C1.51582986,6.88667838 6.93260385,1.50638108 13.5905306,1.50638108 C16.539508,1.50638108 19.3738835,2.57032703 21.5761124,4.50319865 L16.408928,9.6363 C15.589084,9.0428473 14.6153356,8.72942838 13.5905306,8.72942838 C10.9421993,8.72942838 8.78753764,10.8695432 8.78753764,13.5002189" id="Fill-11"></path>
                    <path d="M93.2805588,0 L84.8662994,0 C84.4555554,0 84.1216216,0.330608211 84.1216216,0.737040697 L84.1216216,25.2629593 C84.1216216,25.6695715 84.4555554,26 84.8662994,26 L93.2805588,26 C100.525233,26 106.418919,20.1683586 106.418919,13.0000898 C106.418919,5.83182104 100.525233,0 93.2805588,0 L93.2805588,0 Z M94.0254182,16.0470757 L94.0254182,9.95292427 C95.4566667,10.2917977 96.4522941,11.5385859 96.4522941,13.0000898 C96.4522941,14.4617734 95.4566667,15.7082023 94.0254182,16.0470757 L94.0254182,16.0470757 Z M94.0254182,24.5030995 L94.0254182,17.5534992 C96.2603594,17.1975564 97.9420128,15.2455305 97.9420128,13.0000898 C97.9420128,10.7544695 96.2603594,8.8026233 94.0254182,8.44668044 L94.0254182,1.49708023 C96.9868787,1.68196927 99.733888,2.95660767 101.764002,5.08903064 C103.804829,7.23277334 104.928837,10.0424041 104.928837,13.0000898 C104.928837,15.9575959 103.804829,18.7672267 101.764002,20.911149 C99.733888,23.043572 96.9868787,24.3182104 94.0254182,24.5030995 L94.0254182,24.5030995 Z M85.6109771,24.5260983 L92.5358811,24.5260983 L92.5358811,1.47408139 L85.6109771,1.47408139 L85.6109771,24.5260983 Z" id="Fill-1"></path>
                    <path d="M118.83255,0 L110.22169,0 C109.801181,0 109.459459,0.330608211 109.459459,0.737040697 L109.459459,25.2629593 C109.459459,25.6695715 109.801181,26 110.22169,26 L118.83255,26 C119.252873,26 119.594595,25.6695715 119.594595,25.2629593 L119.594595,0.737040697 C119.594595,0.330608211 119.252873,0 118.83255,0 L118.83255,0 Z M110.983734,24.5260983 L118.070134,24.5260983 L118.070134,1.47408139 L110.983734,1.47408139 L110.983734,24.5260983 Z" id="Fill-3"></path>
                    <path d="M50.6756757,11.0183409 C50.6756757,4.73682828 45.6882226,0 39.074446,0 L30.1461235,0 C29.7294758,0 29.3918919,0.330066895 29.3918919,0.737215281 L29.3918919,25.2627847 C29.3918919,25.6699331 29.7294758,26 30.1461235,26 L49.8933121,26 C50.5199384,26 50.8724158,25.2956656 50.4875774,24.8123341 L46.4141383,19.6958481 C49.1229,17.6505833 50.6756757,14.4900625 50.6756757,11.0183409 L50.6756757,11.0183409 Z M30.9001713,20.5624309 L30.9001713,2.61016973 L44.2194751,19.3393686 C42.6940959,20.1509703 40.9633347,20.5624309 39.074446,20.5624309 L30.9001713,20.5624309 Z M45.4883567,18.5331573 L31.9066715,1.47407121 L39.074446,1.47407121 C44.9225911,1.47407121 49.1672124,5.48805838 49.1672124,11.0183409 C49.1672124,14.0327842 47.8268057,16.7696263 45.4883567,18.5331573 L45.4883567,18.5331573 Z M48.3484427,24.5261085 L30.9001713,24.5261085 L30.9001713,22.0365021 L39.074446,22.0365021 C41.2781189,22.0365021 43.3806636,21.5114855 45.1572082,20.5173319 L48.3484427,24.5261085 Z" id="Fill-5"></path>
                    <path d="M149.956627,25.0211054 L141.027765,0.489986317 C140.920734,0.196030463 140.636236,0 140.31698,0 L131.303891,0 C130.985003,0 130.700321,0.196030463 130.593289,0.489986317 L121.665715,25.0176915 C121.491559,25.4967174 121.854951,26 122.375213,26 L131.389958,26 C131.709029,26 131.993711,25.8037899 132.100743,25.5100137 L135.810435,15.3175077 L139.520496,25.5101934 C139.627344,25.8037899 139.912025,26 140.230913,26 L149.24952,26 C149.493007,26 149.722518,25.8841066 149.862836,25.689873 C150.003338,25.4954596 150.03828,25.245705 149.956627,25.0211054 L149.956627,25.0211054 Z M123.445897,24.5260881 L131.303891,2.93632431 L135.010273,13.1182292 L130.857558,24.5260881 L123.445897,24.5260881 Z M148.175158,24.5260881 L140.763681,24.5260881 L136.611149,13.1182292 L140.31698,2.93632431 L148.175158,24.5260881 Z M139.248319,1.47409158 L135.810435,10.918771 L132.372919,1.47409158 L139.248319,1.47409158 Z" id="Fill-7"></path>
                    <path d="M72.108844,0.489979544 C72.0018119,0.19620743 71.7173123,0 71.3982388,0 L62.385102,0 C62.0658446,0 61.781345,0.19620743 61.6743129,0.489979544 L52.7468753,25.0175254 C52.5725342,25.4965447 52.9359286,26 53.456377,26 L62.471353,26 C62.7904265,26 63.0747421,25.8037926 63.1817743,25.5102001 L66.8916704,15.3174757 L70.6015665,25.5102001 C70.7084148,25.8037926 70.9929143,26 71.3118039,26 L80.3306418,26 C80.5741308,26 80.8034591,25.8837489 80.9439618,25.6893382 C81.0842806,25.4951073 81.1194062,25.2451764 81.0377529,25.0209393 L72.108844,0.489979544 Z M66.0911361,13.1182276 L61.9387669,24.5259288 L54.5268824,24.5259288 L62.385102,2.9364634 L66.0911361,13.1182276 Z M71.8445739,24.5259288 L67.6922047,13.1182276 L71.3982388,2.9364634 L79.2564583,24.5259288 L71.8445739,24.5259288 Z M70.3293886,1.47407121 L66.8916704,10.9186201 L63.4537683,1.47407121 L70.3293886,1.47407121 Z" id="Fill-9"></path>
                </g>
            </g>
        </g>
    </g>
</svg>
<?php
}



// Random työ
function random()
{
	error_reporting(0);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rabota";
        $conn3 = new mysqli($servername, $username, $password, $dbname);
        $result2=mysqli_query($conn3,"SELECT count(*) as total from work");
        $maxsql=mysqli_fetch_assoc($result2);
		$max3=$maxsql['total'];
		$max = (int)$max3;
        $max2=$max-1;
        $random=mt_rand(1,$max);
        $random2=mt_rand(1,$max2);
        if ($random==$random2){
            $random2++;
        }
        $sql = "SELECT * FROM work WHERE id ='$random' OR id='$random2'";
        $result = $conn3->query($sql);


        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $id2=$row['id']?>

                <div class="container-rabota mb-3">
                    <a class="ssilka" href="index.php?act=work&id=<?php echo $id2 ?>">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Työssäoppiminenpaika</h5>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"> Toimiala: <?php echo $row['Toimiala'] ?>  </p>
                                <p class="mb-3"> Postitoimipaikka:  <?php echo mb_strimwidth($row['Postitoimipaikka'], 0,100, '...') ?> </p>
                                <p class="mb-2">  Yhtiö:  <?php echo $row['company' ]?> </p>
                            </div>
                        </div>
                    </a>
                </div>

            <?php }
        }
}

        ?>


