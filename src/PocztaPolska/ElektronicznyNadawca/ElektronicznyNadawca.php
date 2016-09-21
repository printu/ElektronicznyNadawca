<?php

namespace PocztaPolska\ElektronicznyNadawca;

class addShipment
{
    public $przesylki; // przesylkaType
    public $idBufor; // int
}

class addShipmentResponse
{
    public $retval; // addShipmentResponseItemType
}

class przesylkaType
{
    public $guid; // guidType
    public $pakietGuid; // guidType
    public $opakowanieGuid; // guidType
    public $opis; // opisType
}

class pocztexKrajowyType
{
    public $pobranie; // pobranieType
    public $odbiorPrzesylkiOdNadawcy; // odbiorPrzesylkiOdNadawcyType
    public $doreczenie; // doreczenieType
    public $zwrotDokumentow; // zwrotDokumentowType
    public $potwierdzenieOdbioru; // potwierdzenieOdbioruType
    public $potwierdzenieDoreczenia; // potwierdzenieDoreczeniaType
    public $ubezpieczenie; // ubezpieczenieType
    public $posteRestante; // boolean
    public $terminRodzaj; // terminRodzajType
    public $kopertaFirmowa; // boolean
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $ostroznie; // boolean
    public $ponadgabaryt; // boolean
    public $uiszczaOplate; // uiszczaOplateType
    public $odleglosc; // int
    public $zawartosc; // string
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce; // boolean
}

class umowaType
{
}

class masaType
{
}

class numerNadaniaType
{
}

class changePassword
{
    public $newPassword; // string
}

class changePasswordResponse
{
    public $error; // errorType
}

class terminRodzajType
{
    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const MIEJSKI_DO_4H_DO_10KM = 'MIEJSKI_DO_4H_DO_10KM';
    const MIEJSKI_DO_4H_DO_15KM = 'MIEJSKI_DO_4H_DO_15KM';
    const MIEJSKI_DO_4H_DO_20KM = 'MIEJSKI_DO_4H_DO_20KM';
    const MIEJSKI_DO_4H_DO_30KM = 'MIEJSKI_DO_4H_DO_30KM';
    const MIEJSKI_DO_4H_DO_40KM = 'MIEJSKI_DO_4H_DO_40KM';
    const KRAJOWY = 'KRAJOWY';
    const BEZPOSREDNI_DO_30KG = 'BEZPOSREDNI_DO_30KG';
    const BEZPOSREDNI_OD_30KG_DO_100KG = 'BEZPOSREDNI_OD_30KG_DO_100KG';
    const EKSPRES24 = 'EKSPRES24';
}

class uiszczaOplateType
{
    const NADAWCA = 'NADAWCA';
    const ADRESAT = 'ADRESAT';
}

class wartoscType
{
}

class kwotaPobraniaType
{
}

class sposobPobraniaType
{
    const PRZEKAZ = 'PRZEKAZ';
    const RACHUNEK_BANKOWY = 'RACHUNEK_BANKOWY';
}

class sposobPrzekazaniaType
{
    const LIST_ZWYKLY_PRIOTYTET = 'LIST_ZWYKLY_PRIOTYTET';
    const POCZTEX = 'POCZTEX';
}

class sposobDoreczeniaPotwierdzeniaType
{
    const TELEFON = 'TELEFON';
    const TELEFAX = 'TELEFAX';
    const SMS = 'SMS';
    const EMAIL = 'EMAIL';
}

class iloscPotwierdzenOdbioruType
{
}

class dataDlaDostarczeniaType
{
}

class razemType
{
}

class nazwaType
{
}

class nazwa2Type
{
}

class ulicaType
{
}

class numerDomuType
{
}

class numerLokaluType
{
}

class miejscowoscType
{
}

class kodPocztowyType
{
}

class paczkaPocztowaType
{
    public $posteRestante; // boolean
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $kategoria; // kategoriaType
    public $gabaryt; // gabarytType
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $zwrotDoslanie; // boolean
    public $egzemplarzBiblioteczny; // boolean
    public $dlaOciemnialych; // boolean
}

class kategoriaType
{
    const EKONOMICZNA = 'EKONOMICZNA';
    const PRIORYTETOWA = 'PRIORYTETOWA';
}

class gabarytType
{
    const GABARYT_A = 'GABARYT_A';
    const GABARYT_B = 'GABARYT_B';
}

class paczkaPocztowaPLUSType
{
    public $posteRestante; // boolean
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $kategoria; // kategoriaType
    public $gabaryt; // gabarytType
    public $wartosc; // wartoscType
    public $masa; // masaType
    public $zwrotDoslanie; // boolean
}

class przesylkaPobraniowaType
{
    public $pobranie; // pobranieType
    public $posteRestante; // boolean
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $kategoria; // kategoriaType
    public $gabaryt; // gabarytType
    public $ostroznie; // boolean
    public $wartosc; // wartoscType
    public $masa; // masaType
}

class przesylkaNaWarunkachSzczegolnychType
{
    public $posteRestante; // boolean
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $kategoria; // kategoriaType
    public $wartosc; // wartoscType
    public $masa; // masaType
}

class przesylkaPoleconaKrajowaType
{
    public $epo; // EPOType
    public $posteRestante; // boolean
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $kategoria; // kategoriaType
    public $gabaryt; // gabarytType
    public $masa; // masaType
    public $egzemplarzBiblioteczny; // boolean
    public $dlaOciemnialych; // boolean
}

class przesylkaHandlowaType
{
    public $posteRestante; // boolean
    public $masa; // masaType
}

class przesylkaListowaZadeklarowanaWartoscType
{
    public $posteRestante; // boolean
    public $wartosc; // wartoscType
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $kategoria; // kategoriaType
    public $gabaryt; // gabarytType
    public $masa; // masaType
}

class przesylkaFullType
{
    public $przesylkaShort; // przesylkaShortType
    public $przesylkaFull; // przesylkaType
}

class errorType
{
    public $errorNumber; // int
    public $errorDesc; // string
    public $guid; // guidType
}

class adresType
{
    public $nazwa; // nazwaType
    public $nazwa2; // nazwa2Type
    public $ulica; // ulicaType
    public $numerDomu; // numerDomuType
    public $numerLokalu; // numerLokaluType
    public $miejscowosc; // miejscowoscType
    public $kodPocztowy; // kodPocztowyType
    public $kraj; // krajType
    public $telefon; // telefonType
    public $email; // emailType
    public $mobile; // mobileType
    public $osobaKontaktowa; // string
    public $nip; // string
}

class sendEnvelope
{
    public $urzadNadania; // urzadNadaniaType
    public $pakiet; // pakietType
    public $idBufor; // int
}

class sendEnvelopeResponseType
{
    public $idEnvelope; // int
    public $envelopeStatus; // envelopeStatusType
    public $error; // errorType
}

class urzadNadaniaType
{
}

class getUrzedyNadania
{
}

class getUrzedyNadaniaResponse
{
    public $urzedyNadania; // urzadNadaniaFullType
}

class clearEnvelope
{
    public $idBufor; // int
}

class clearEnvelopeResponse
{
    public $retval; // boolean
    public $error; // errorType
}

class urzadNadaniaFullType
{
    public $urzadNadania; // urzadNadaniaType
    public $opis; // string
    public $nazwaWydruk; // string
}

class guidType
{
}

class ePrzesylkaType
{
    public $urzadWydaniaEPrzesylki; // urzadWydaniaEPrzesylkiType
    public $pobranie; // pobranieType
    public $masa; // masaType
    public $eSposobPowiadomieniaAdresata; // eSposobPowiadomieniaType
    public $eSposobPowiadomieniaNadawcy; // eSposobPowiadomieniaType
    public $eKontaktAdresata; // eKontaktType
    public $eKontaktNadawcy; // eKontaktType
    public $ostroznie; // boolean
    public $wartosc; // wartoscType
}

class eSposobPowiadomieniaType
{
    const SMS = 'SMS';
    const EMAIL = 'EMAIL';
}

class eKontaktType
{
}

class urzadWydaniaEPrzesylkiType
{
}

class pobranieType
{
    public $sposobPobrania; // sposobPobraniaType
    public $kwotaPobrania; // kwotaPobraniaType
    public $nrb; // anonymous52
    public $tytulem; // anonymous53
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce; // boolean
}

class anonymous52
{
}

class anonymous53
{
}

class przesylkaPoleconaZagranicznaType
{
    public $posteRestante; // boolean
    public $masa; // masaType
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
}

class przesylkaZadeklarowanaWartoscZagranicznaType
{
    public $posteRestante; // boolean
    public $masa; // masaType
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
}

class krajType
{
}

class getUrzedyWydajaceEPrzesylki
{
}

class getUrzedyWydajaceEPrzesylkiResponse
{
    public $urzadWydaniaEPrzesylki; // urzadWydaniaEPrzesylkiType
}

class uploadIWDContent
{
    public $urzadNadania; // urzadNadaniaType
    public $IWDContent; // base64Binary
}

class getEnvelopeStatus
{
    public $idEnvelope; // int
}

class getEnvelopeStatusResponse
{
    public $envelopeStatus; // envelopeStatusType
    public $error; // errorType
}

class envelopeStatusType
{
    const WYSLANY = 'WYSLANY';
    const DOSTARCZONY = 'DOSTARCZONY';
    const PRZYJETY = 'PRZYJETY';
    const WALIDOWANY = 'WALIDOWANY';
    const BLEDNY = 'BLEDNY';
}

class downloadIWDContent
{
    public $idEnvelope; // int
}

class downloadIWDContentResponse
{
    public $IWDContent; // base64Binary
    public $error; // errorType
}

class przesylkaShortType
{
    public $czynnosciUpustowe; // czynnoscUpustowaType
    public $numerNadania; // numerNadaniaType
    public $guid; // guidType
    public $dataNadania; // date
    public $razem; // int
    public $pobranie; // int
    public $status; // statusType
}

class addShipmentResponseItemType
{
    public $error; // errorType
    public $numerNadania; // numerNadaniaType
    public $guid; // guidType
}

class getKarty
{
}

class getKartyResponse
{
    public $karta; // kartaType
}

class getPasswordExpiredDate
{
}

class getPasswordExpiredDateResponse
{
    public $dataWygasniecia; // date
}

class setAktywnaKarta
{
    public $idKarta; // int
}

class setAktywnaKartaResponse
{
    public $error; // errorType
}

class getEnvelopeContentFull
{
    public $idEnvelope; // int
}

class getEnvelopeContentFullResponse
{
    public $przesylka; // przesylkaFullType
}

class getEnvelopeContentShort
{
    public $idEnvelope; // int
}

class getEnvelopeContentShortResponse
{
    public $przesylka; // przesylkaShortType
}

class hello
{
    public $in; // string
}

class helloResponse
{
    public $out; // string
}

class kartaType
{
    public $idKarta; // int
    public $opis; // string
    public $aktywna; // boolean
}

class telefonType
{
}

class getAddressLabel
{
    public $idEnvelope; // int
}

class getAddressLabelResponse
{
    public $content; // addressLabelContent
    public $error; // errorType
}

class addressLabelContent
{
    public $pdfContent; // base64Binary
    public $nrNadania; // string
    public $guid; // string
}

class getOutboxBook
{
    public $idEnvelope; // int
    public $includeNierejestrowane; // boolean
}

class getOutboxBookResponse
{
    public $pdfContent; // base64Binary
    public $error; // errorType
}

class getFirmowaPocztaBook
{
    public $idEnvelope; // int
}

class getFirmowaPocztaBookResponse
{
    public $pdfContent; // base64Binary
    public $error; // errorType
}

class getEnvelopeList
{
    public $startDate; // date
    public $endDate; // date
}

class getEnvelopeListResponse
{
    public $envelopes; // envelopeInfoType
}

class envelopeInfoType
{
    public $error; // errorType
    public $idEnvelope; // int
    public $envelopeStatus; // envelopeStatusType
    public $dataTransmisji; // date
}

class przesylkaZagranicznaType
{
    public $posteRestante; // boolean
    public $kategoria; // kategoriaType
    public $masa; // masaType
    public $ekspres; // boolean
    public $kraj; // string
}

class przesylkaRejestrowanaType
{
    public $adres; // adresType
    public $numerNadania; // numerNadaniaType
}

class przesylkaNieRejestrowanaType
{
    public $ilosc; // anonymous94
}

class anonymous94
{
}

class przesylkaBiznesowaType
{
    public $pobranie; // pobranieType
    public $urzadWydaniaEPrzesylki; // urzadWydaniaEPrzesylkiType
    public $subPrzesylka; // subPrzesylkaBiznesowaType
    public $ubezpieczenie; // ubezpieczenieType
    public $masa; // masaType
    public $gabaryt; // gabarytBiznesowaType
    public $wartosc; // wartoscType
    public $ostroznie; // boolean
}

class gabarytBiznesowaType
{
    const XS = 'XS';
    const S = 'S';
    const M = 'M';
    const L = 'L';
    const XL = 'XL';
    const XXL = 'XXL';
}

class subPrzesylkaBiznesowaType
{
    public $pobranie; // pobranieType
    public $ubezpieczenie; // ubezpieczenieType
    public $numerNadania; // numerNadaniaType
    public $masa; // masaType
    public $gabaryt; // gabarytBiznesowaType
    public $wartosc; // wartoscType
    public $ostroznie; // boolean
}

class subPrzesylkaBiznesowaPlusType
{
    public $pobranie; // pobranieType
    public $numerNadania; // numerNadaniaType
    public $masa; // masaType
    public $gabaryt; // gabarytBiznesowaType
    public $wartosc; // wartoscType
    public $ostroznie; // boolean
    public $numerPrzesylkiKlienta; // string
    public $kwotaTranzakcji; // int
}

class getAddresLabelByGuid
{
    public $guid; // guidType
    public $idBufor; // int
}

class getAddresLabelByGuidResponse
{
    public $content; // addressLabelContent
    public $error; // errorType
}

class przesylkaBiznesowaPlusType
{
    public $pobranie; // pobranieType
    public $urzadWydaniaPrzesylki; // placowkaPocztowaType
    public $subPrzesylka; // subPrzesylkaBiznesowaPlusType
    public $dataDrugiejProbyDoreczenia; // date
    public $drugaProbaDoreczeniaPoLiczbieDni; // int
    public $posteRestante; // boolean
    public $masa; // masaType
    public $gabaryt; // gabarytBiznesowaType
    public $wartosc; // wartoscType
    public $kwotaTranzakcji; // kwotaTranzakcjiType
    public $ostroznie; // boolean
    public $kategoria; // kategoriaType
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $zwrotDoslanie; // boolean
    public $eKontaktAdresata; // eKontaktType
    public $eSposobPowiadomieniaAdresata; // eSposobPowiadomieniaType
    public $numerPrzesylkiKlienta; // numerPrzesylkiKlientaType
    public $iloscDniOczekiwaniaNaWydanie; // int
    public $oczekiwanyTerminDoreczenia; // dateTime
    public $terminRodzajPlus; // terminRodzajPlusType
}

class opisType
{
}

class numerPrzesylkiKlientaType
{
}

class pakietType
{
    public $kierunek; // kierunekType
    public $opakowanie; // opakowanieType
    public $czynnoscUpustowa; // czynnoscUpustowaType
    public $pakietGuid; // guidType
    public $miejsceOdbioru; // miejsceOdbioruType
    public $sposobNadania; // sposobNadaniaType
}

class opakowanieType
{
    public $opakowanieGuid; // guidType
    public $typ; // typOpakowanieType
    public $sygnatura; // string
    public $ilosc; // int
    public $numerOpakowaniaZbiorczego; // string
}

class typOpakowaniaType
{
}

class getPlacowkiPocztowe
{
    public $idWojewodztwo; // idWojewodztwoType
}

class getPlacowkiPocztoweResponse
{
    public $placowka; // placowkaPocztowaType
}

class getGuid
{
    public $ilosc; // int
}

class getGuidResponse
{
    public $guid; // guidType
}

class kierunekType
{
    public $kodPocztowy; // kodPocztowyType
    public $id; // int
    public $opis; // string
    public $pna; // kodPocztowyType
}

class getKierunki
{
    public $plan; // string
    public $prefixKodPocztowy; // prefixKodPocztowy
}

class prefixKodPocztowy
{
}

class getKierunkiResponse
{
    public $kierunek; // kierunekType
    public $error; // errorType
}

class czynnoscUpustowaType
{
    const POSORTOWANA = 'POSORTOWANA';
}

class miejsceOdbioruType
{
    const NADAWCA = 'NADAWCA';
    const URZAD_NADANIA = 'URZAD_NADANIA';
}

class sposobNadaniaType
{
    const WERYFIKACJA_WEZEL_DOCELOWY = 'WERYFIKACJA_WEZEL_DOCELOWY';
    const WERYFIKACJA_WEZEL_NADAWCZY = 'WERYFIKACJA_WEZEL_NADAWCZY';
}

class getKierunkiInfo
{
    public $plan; // string
}

class getKierunkiInfoResponse
{
    public $lastUpdate; // date
    public $usluga; // uslugiType
    public $error; // errorType
}

class kwotaTranzakcjiType
{
}

class uslugiType
{
    public $id; // string
    public $opis; // string
}

class idWojewodztwoType
{
    const value_02 = '02';
    const value_04 = '04';
    const value_06 = '06';
    const value_08 = '08';
    const value_10 = '10';
    const value_12 = '12';
    const value_14 = '14';
    const value_16 = '16';
    const value_18 = '18';
    const value_20 = '20';
    const value_22 = '22';
    const value_24 = '24';
    const value_26 = '26';
    const value_28 = '28';
    const value_30 = '30';
    const value_32 = '32';
}

class placowkaPocztowaType
{
    public $lokalizacjaGeograficzna; // lokalizacjaGeograficznaType
    public $id; // int
    public $prefixNazwy; // string
    public $nazwa; // string
    public $wojewodztwo; // string
    public $powiat; // string
    public $miejsce; // string
    public $kodPocztowy; // anonymous124
    public $miejscowosc; // anonymous125
    public $ulica; // string
    public $numerDomu; // string
    public $numerLokalu; // string
    public $nazwaWydruk; // string
    public $punktWydaniaEPrzesylki; // boolean
    public $powiadomienieSMS; // boolean
    public $punktWydaniaPrzesylkiBiznesowejPlus; // boolean
    public $punktWydaniaPrzesylkiBiznesowej; // boolean
}

class anonymous124
{
}

class anonymous125
{
}

class punktWydaniaPrzesylkiBiznesowejPlus
{
}

class statusType
{
    const NIEPOTWIERDZONA = 'NIEPOTWIERDZONA';
    const POTWIERDZONA = 'POTWIERDZONA';
    const NOWA = 'NOWA';
    const BRAK = 'BRAK';
}

class terminRodzajPlusType
{
    const PORANEK = 'PORANEK';
    const POLUDNIE = 'POLUDNIE';
    const STANDARD = 'STANDARD';
}

class typOpakowanieType
{
    const KL1 = 'KL1';
    const KL2 = 'KL2';
    const KL3 = 'KL3';
    const S21 = 'S21';
    const S22 = 'S22';
    const S23 = 'S23';
    const P31 = 'P31';
    const P32 = 'P32';
    const P33 = 'P33';
    const SP41 = 'SP41';
    const SP42 = 'SP42';
    const WKL51 = 'WKL51';
    const K1 = 'K1';
    const K2 = 'K2';
    const K3 = 'K3';
    const P = 'P';
    const W = 'W';
}

class getEnvelopeBufor
{
    public $idBufor; // int
}

class getEnvelopeBuforResponse
{
    public $przesylka; // przesylkaType
    public $error; // errorType
}

class clearEnvelopeByGuids
{
    public $guid; // guidType
    public $idBufor; // int
}

class clearEnvelopeByGuidsResponse
{
    public $error; // errorType
}

class zwrotDokumentowType
{
    public $rodzajPocztex; // terminRodzajType
    public $rodzajList; // rodzajListType
    public $odleglosc; // int
}

class odbiorPrzesylkiOdNadawcyType
{
    public $wSobote; // boolean
    public $wNiedzieleLubSwieto; // boolean
    public $wGodzinachOd20Do7; // boolean
}

class potwierdzenieDoreczeniaType
{
    public $sposob; // sposobDoreczeniaPotwierdzeniaType
    public $kontakt; // string
}

class rodzajListType
{
    public $polecony; // boolean
    public $kategoria; // kategoriaType
}

class potwierdzenieOdbioruType
{
    public $ilosc; // iloscPotwierdzenOdbioruType
    public $sposob; // sposobPrzekazaniaPotwierdzeniaOdbioruType
}

class sposobPrzekazaniaPotwierdzeniaOdbioruType
{
    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const MIEJSKI_DO_4H_DO_10KM = 'MIEJSKI_DO_4H_DO_10KM';
    const MIEJSKI_DO_4H_DO_15KM = 'MIEJSKI_DO_4H_DO_15KM';
    const MIEJSKI_DO_4H_DO_20KM = 'MIEJSKI_DO_4H_DO_20KM';
    const MIEJSKI_DO_4H_DO_30KM = 'MIEJSKI_DO_4H_DO_30KM';
    const MIEJSKI_DO_4H_DO_40KM = 'MIEJSKI_DO_4H_DO_40KM';
    const EKSPRES24 = 'EKSPRES24';
    const LIST_ZWYKLY = 'LIST_ZWYKLY';
}

class doreczenieType
{
    public $oczekiwanyTerminDoreczenia; // date
    public $oczekiwanaGodzinaDoreczenia; // oczekiwanaGodzinaDoreczeniaType
    public $wSobote; // boolean
    public $w90Minut; // boolean
    public $wNiedzieleLubSwieto; // boolean
    public $doRakWlasnych; // boolean
    public $wGodzinachOd20Do7; // boolean
}

class doreczenieUslugaPocztowaType
{
    public $oczekiwanyTerminDoreczenia; // date
    public $oczekiwanaGodzinaDoreczenia; // oczekiwanaGodzinaDoreczeniaUslugiType
    public $wSobote; // boolean
    public $doRakWlasnych; // boolean
}

class doreczenieUslugaKurierskaType
{
    public $oczekiwanyTerminDoreczenia; // date
    public $oczekiwanaGodzinaDoreczenia; // oczekiwanaGodzinaDoreczeniaUslugiType
    public $wSobote; // boolean
    public $w90Minut; // boolean
    public $wNiedzieleLubSwieto; // boolean
    public $doRakWlasnych; // boolean
    public $wGodzinachOd20Do7; // boolean
    public $po17; // boolean
}

class oczekiwanaGodzinaDoreczeniaType
{
    const DO_08_00 = 'DO 08:00';
    const DO_09_00 = 'DO 09:00';
    const DO_12_00 = 'DO 12:00';
    const NA_13_00 = 'NA 13:00';
    const NA_14_00 = 'NA 14:00';
    const NA_15_00 = 'NA 15:00';
    const NA_16_00 = 'NA 16:00';
    const NA_17_00 = 'NA 17:00';
    const NA_18_00 = 'NA 18:00';
    const NA_19_00 = 'NA 19:00';
    const NA_20_00 = 'NA 20:00';
}

class oczekiwanaGodzinaDoreczeniaUslugiType
{
    const DO_08_00 = 'DO 08:00';
    const DO_09_00 = 'DO 09:00';
    const DO_12_00 = 'DO 12:00';
    const NA_13_00 = 'NA 13:00';
    const NA_14_00 = 'NA 14:00';
    const NA_15_00 = 'NA 15:00';
    const NA_16_00 = 'NA 16:00';
    const NA_17_00 = 'NA 17:00';
    const NA_18_00 = 'NA 18:00';
    const NA_19_00 = 'NA 19:00';
    const NA_20_00 = 'NA 20:00';
    const PO_17_00 = 'PO 17:00';
}

class paczkaZagranicznaType
{
    public $zwrot; // zwrotType
    public $deklaracjaCelna; // deklaracjaCelnaType
    public $posteRestante; // boolean
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $kategoria; // kategoriaType
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $utrudnionaManipulacja; // boolean
    public $ekspres; // boolean
    public $numerReferencyjnyCelny; // string
}

class setEnvelopeBuforDataNadania
{
    public $dataNadania; // date
}

class setEnvelopeBuforDataNadaniaResponse
{
    public $error; // errorType
}

class lokalizacjaGeograficznaType
{
    public $dlugosc; // wspolrzednaGeograficznaType
    public $szerokosc; // wspolrzednaGeograficznaType
}

class wspolrzednaGeograficznaType
{
    public $dec; // float
    public $stopien; // int
    public $minuta; // int
    public $sekunda; // float
}

class zwrotType
{
    public $zwrotPoLiczbieDni; // int
    public $traktowacJakPorzucona; // boolean
    public $sposobZwrotu; // sposobZwrotuType
}

class sposobZwrotuType
{
    const LADOWO_MORSKA = 'LADOWO_MORSKA';
    const LOTNICZA = 'LOTNICZA';
}

class listZwyklyType
{
    public $posteRestante; // boolean
    public $kategoria; // kategoriaType
    public $gabaryt; // gabarytType
    public $masa; // masaType
    public $egzemplarzBiblioteczny; // boolean
    public $dlaOciemnialych; // boolean
}

class reklamowaType
{
    public $masa; // masaType
    public $gabaryt; // gabarytType
}

class getEPOStatus
{
    public $guid; // guidType
    public $endedOnly; // boolean
    public $idEnvelope; // int
}

class getEPOStatusResponse
{
    public $epo; // przesylkaEPOType
    public $error; // errorType
}

class statusEPOEnum
{
    const ERROR = 'ERROR';
    const NADANIE = 'NADANIE';
    const W_TRANSPORCIE = 'W_TRANSPORCIE';
    const CLO = 'CLO';
    const SMS = 'SMS';
    const W_DORECZENIU = 'W_DORECZENIU';
    const AWIZO = 'AWIZO';
    const PONOWNE_AWIZO = 'PONOWNE_AWIZO';
    const ZWROT = 'ZWROT';
    const DORECZONA = 'DORECZONA';
}

class EPOType
{
}

class EPOSimpleType
{
}

class EPOExtendedType
{
    public $zasadySpecjalne; // zasadySpecjalneEnum
}

class zasadySpecjalneEnum
{
    const ADMINISTRACYJNA = 'ADMINISTRACYJNA';
    const PODATKOWA = 'PODATKOWA';
    const SADOWA_CYWILNA = 'SADOWA_CYWILNA';
    const SADOWA_KARNA = 'SADOWA_KARNA';
}

class przesylkaEPOType
{
    public $EPOInfo; // EPOInfoType
    public $guid; // guidType
    public $numerNadania; // numerNadaniaType
    public $statusEPO; // statusEPOEnum
}

class przesylkaFirmowaPoleconaType
{
    public $epo; // EPOType
    public $posteRestante; // boolean
    public $iloscPotwierdzenOdbioru; // iloscPotwierdzenOdbioruType
    public $masa; // masaType
    public $miejscowa; // boolean
}

class EPOInfoType
{
    public $awizoPrzesylki; // awizoPrzesylkiType
    public $doreczeniePrzesylki; // doreczeniePrzesylkiType
    public $zwrotPrzesylki; // zwrotPrzesylkiType
}

class awizoPrzesylkiType
{
    public $dataPierwszegoAwizowania; // date
    public $dataDrugiegoAwizowania; // date
    public $miejscePozostawienia; // miejscaPozostawieniaAwizoEnum
    public $idPlacowkaPocztowaWydajaca; // int
}

class doreczeniePrzesylkiType
{
    public $data; // dateTime
    public $osobaOdbierajaca; // string
    public $podmiotDoreczenia; // podmiotDoreczeniaEnum
}

class zwrotPrzesylkiType
{
    public $przyczyna; // przyczynaZwrotuEnum
    public $data; // dateTime
}

class miejscaPozostawieniaAwizoEnum
{
    const SKRZYNKA_ADRESATA = 'SKRZYNKA_ADRESATA';
    const DRZWI_MIESZKANIA = 'DRZWI_MIESZKANIA';
    const DRZWI_BIURA = 'DRZWI_BIURA';
    const DRZWI_INNE = 'DRZWI_INNE';
    const PRZY_WEJSCIU_NA_POSESJE = 'PRZY_WEJSCIU_NA_POSESJE';
}

class podmiotDoreczeniaEnum
{
    const ADRESAT = 'ADRESAT';
    const PELNOLETNI_DOMOWNIK = 'PELNOLETNI_DOMOWNIK';
    const SASIAD = 'SASIAD';
    const DOZORCA_DOMU = 'DOZORCA_DOMU';
}

class przyczynaZwrotuEnum
{
    const ODMOWA = 'ODMOWA';
    const ADRESAT_ZMARL = 'ADRESAT_ZMARL';
    const ADRESAT_NIEZNANY = 'ADRESAT_NIEZNANY';
    const ADRESAT_WYPROWADZIL_SIE = 'ADRESAT_WYPROWADZIL_SIE';
    const ADRESAT_NIE_PODJAL = 'ADRESAT_NIE_PODJAL';
    const INNA = 'INNA';
}

class getAddresLabelCompact
{
    public $idEnvelope; // int
}

class getAddresLabelCompactResponse
{
    public $pdfContent; // base64Binary
    public $error; // errorType
}

class getAddresLabelByGuidCompact
{
    public $guid; // guidType
    public $idBufor; // int
}

class getAddresLabelByGuidCompactResponse
{
    public $pdfContent; // base64Binary
    public $error; // errorType
}

class ubezpieczenieType
{
    public $rodzaj; // rodzajUbezpieczeniaType
    public $kwota; // kwotaUbezpieczeniaType
}

class rodzajUbezpieczeniaType
{
    const STANDARD = 'STANDARD';
    const PRECJOZA = 'PRECJOZA';
}

class kwotaUbezpieczeniaType
{
}

class emailType
{
}

class mobileType
{
}

class EMSType
{
    public $ubezpieczenie; // ubezpieczenieType
    public $deklaracjaCelna; // deklaracjaCelnaType
    public $typOpakowania; // EMSTypOpakowaniaType
    public $masa; // masaType
    public $zalaczoneDokumenty; // boolean
}

class EMSTypOpakowaniaType
{
    const ZWYKLY = 'ZWYKLY';
    const DOKUMENT_PACK = 'DOKUMENT_PACK';
    const KILO_PACK = 'KILO_PACK';
}

class getEnvelopeBuforList
{
}

class getEnvelopeBuforListResponse
{
    public $bufor; // buforType
    public $error; // errorType
}

class buforType
{
    public $idBufor; // int
    public $dataNadania; // date
    public $urzadNadania; // urzadNadaniaType
    public $active; // boolean
    public $opis; // string
}

class createEnvelopeBufor
{
    public $bufor; // buforType
}

class createEnvelopeBuforResponse
{
    public $createdBufor; // buforType
    public $error; // errorType
}

class moveShipments
{
    public $idBuforFrom; // int
    public $idBuforTo; // int
    public $guid; // guidType
}

class moveShipmentsResponse
{
    public $notMovedGuid; // guidType
    public $error; // errorType
}

class updateEnvelopeBufor
{
    public $bufor; // buforType
}

class updateEnvelopeBuforResponse
{
    public $error; // errorType
}

class getUbezpieczeniaInfo
{
}

class getUbezpieczeniaInfoResponse
{
    public $poziomyUbezpieczenia; // ubezpieczeniaInfoType
}

class ubezpieczeniaInfoType
{
    public $typPrzesylki; // string
    public $kwota; // kwotaUbezpieczeniaType
}

class isMiejscowa
{
    public $trasaRequest; // trasaRequestType
}

class isMiejscowaResponse
{
    public $trasaResponse; // trasaResponseType
}

class trasaRequestType
{
    public $fromUrzadNadania; // urzadNadaniaType
    public $toKodPocztowy; // kodPocztowyType
    public $guid; // guidType
}

class trasaResponseType
{
    public $isMiejscowa; // boolean
    public $guid; // guidType
}

class deklaracjaCelnaType
{
    public $szczegoly; // szczegolyDeklaracjiCelnejType
    public $podarunek; // boolean
    public $dokument; // boolean
    public $probkaHandlowa; // boolean
    public $zwrotTowaru; // boolean
    public $towary; // boolean
    public $inny; // boolean
    public $wyjasnienie; // string
    public $oplatyPocztowe; // string
    public $uwagi; // string
    public $licencja; // string
    public $swiadectwo; // string
    public $faktura; // string
    public $numerReferencyjnyImportera; // string
    public $numerTelefonuImportera; // string
    public $waluta; // string
}

class szczegolyDeklaracjiCelnejType
{
    public $zawartosc; // string
    public $ilosc; // float
    public $masa; // int
    public $wartosc; // int
    public $numerTaryfowy; // string
    public $krajPochodzenia; // string
}

class przesylkaPaletowaType
{
    public $miejsceOdbioru; // adresType
    public $miejsceDoreczenia; // adresType
    public $paleta; // paletaType
    public $platnik; // platnikType
    public $pobranie; // pobranieType
    public $subPaleta; // subPrzesylkaPaletowaType
    public $zawartosc; // string
    public $masa; // masaType
    public $dataZaladunku; // date
    public $dataDostawy; // date
    public $wartosc; // wartoscType
    public $iloscZwracanychPaletEUR; // int
    public $zalaczonaFV; // string
    public $zalaczonyWZ; // string
    public $zalaczoneInne; // string
    public $zwracanaFV; // string
    public $zwracanyWZ; // string
    public $zwracaneInne; // string
    public $powiadomienieNadawcy; // string
    public $powiadomienieOdbiorcy; // eSposobPowiadomieniaType
}

class rodzajPaletyType
{
    const EUR = 'EUR';
    const POLPALETA = 'POLPALETA';
    const INNA = 'INNA';
}

class paletaType
{
    public $rodzajPalety; // rodzajPaletyType
    public $szerokosc; // int
    public $dlugosc; // string
    public $wysokosc; // string
}

class platnikType
{
    public $uiszczaOplate; // uiszczaOplateType
    public $adresPlatnika; // adresType
}

class subPrzesylkaPaletowaType
{
    public $paleta; // paletaType
    public $zawartosc; // string
    public $masa; // masaType
}

class getBlankietPobraniaByGuids
{
    public $guid; // guidType
    public $idBufor; // int
}

class getBlankietPobraniaByGuidsResponse
{
    public $content; // addressLabelContent
    public $error; // errorType
}

class updateAccount
{
    public $account; // accountType
}

class updateAccountResponse
{
    public $error; // errorType
}

class accountType
{
    public $karta; // kartaType
    public $permision; // permisionType
    public $profil; // profilType
    public $userName; // string
    public $firstName; // string
    public $lastName; // string
    public $email; // string
    public $status; // statusAccountType
}

class permisionType
{
    const MANAGE_USERS = 'MANAGE_USERS';
    const TRANSMIT = 'TRANSMIT';
    const MANAGE_PROFILES = 'MANAGE_PROFILES';
    const MANAGE_ORGANIZATION_UNIT = 'MANAGE_ORGANIZATION_UNIT';
}

class getAccountList
{
}

class getAccountListResponse
{
    public $account; // accountType
}

class profilType
{
    public $idProfil; // int
    public $nazwaSkrocona; // string
    public $fax; // string
}

class getProfilList
{
}

class getProfilListResponse
{
    public $profil; // profilType
}

class updateProfil
{
    public $profil; // profilType
}

class updateProfilResponse
{
    public $error; // errorType
}

class statusAccountType
{
    const WYLACZONY = 'WYLACZONY';
    const ZABLOKOWANY = 'ZABLOKOWANY';
    const ODBLOKOWANY = 'ODBLOKOWANY';
}

class uslugaPaczkowaType
{
    public $pobranie; // pobranieType
    public $potwierdzenieDoreczenia; // potwierdzenieDoreczeniaType
    public $urzadWydaniaEPrzesylki; // urzadWydaniaEPrzesylkiType
    public $subPrzesylka; // subUslugaPaczkowaType
    public $potwierdzenieOdbioru; // potwierdzenieOdbioruPaczkowaType
    public $ubezpieczenie; // ubezpieczenieType
    public $zwrotDokumentow; // zwrotDokumentowPaczkowaType
    public $doreczenie; // doreczenieUslugaPocztowaType
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $ponadgabaryt; // boolean
    public $zawartosc; // string
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce; // boolean
    public $ostroznie; // boolean
    public $uiszczaOplate; // uiszczaOplateType
    public $termin; // terminPaczkowaType
    public $opakowanie; // opakowaniePocztowaType
    public $numerPrzesylkiKlienta; // string
}

class subUslugaPaczkowaType
{
    public $pobranie; // pobranieType
    public $ubezpieczenie; // ubezpieczenieType
    public $numerNadania; // numerNadaniaType
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $ostroznie; // boolean
    public $opakowanie; // opakowaniePocztowaType
    public $ponadgabaryt; // boolean
    public $numerPrzesylkiKlienta; // string
}

class terminPaczkowaType
{
    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
    const PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
}

class opakowaniePocztowaType
{
    const PACZKA_DO_POL_KILO = 'PACZKA_DO_POL_KILO';
    const FIRMOWA_DO_1KG = 'FIRMOWA_DO_1KG';
    const GABARYT_G1 = 'GABARYT_G1';
    const GABARYT_G2 = 'GABARYT_G2';
    const GABARYT_G3 = 'GABARYT_G3';
    const GABARYT_G4 = 'GABARYT_G4';
    const GABARYT_G5 = 'GABARYT_G5';
}

class uslugaKurierskaType
{
    public $pobranie; // pobranieType
    public $odbiorPrzesylkiOdNadawcy; // odbiorPrzesylkiOdNadawcyType
    public $potwierdzenieDoreczenia; // potwierdzenieDoreczeniaType
    public $urzadWydaniaEPrzesylki; // urzadWydaniaEPrzesylkiType
    public $subPrzesylka; // subUslugaKurierskaType
    public $potwierdzenieOdbioru; // potwierdzenieOdbioruKurierskaType
    public $ubezpieczenie; // ubezpieczenieType
    public $zwrotDokumentow; // zwrotDokumentowKurierskaType
    public $doreczenie; // doreczenieUslugaKurierskaType
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $ponadgabaryt; // boolean
    public $odleglosc; // int
    public $zawartosc; // string
    public $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce; // boolean
    public $ostroznie; // boolean
    public $uiszczaOplate; // uiszczaOplateType
    public $termin; // terminKurierskaType
    public $opakowanie; // opakowanieKurierskaType
    public $numerPrzesylkiKlienta; // string
}

class subUslugaKurierskaType
{
    public $pobranie; // pobranieType
    public $ubezpieczenie; // ubezpieczenieType
    public $numerNadania; // numerNadaniaType
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $ostroznie; // boolean
    public $opakowanie; // opakowanieKurierskaType
    public $ponadgabaryt; // boolean
    public $numerPrzesylkiKlienta; // string
}

class createAccount
{
    public $account; // accountType
}

class createAccountResponse
{
    public $error; // errorType
}

class createProfil
{
    public $profil; // profilType
}

class createProfilResponse
{
    public $error; // errorType
}

class terminKurierskaType
{
    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const MIEJSKI_DO_4H_DO_10KM = 'MIEJSKI_DO_4H_DO_10KM';
    const MIEJSKI_DO_4H_DO_15KM = 'MIEJSKI_DO_4H_DO_15KM';
    const MIEJSKI_DO_4H_DO_20KM = 'MIEJSKI_DO_4H_DO_20KM';
    const MIEJSKI_DO_4H_DO_30KM = 'MIEJSKI_DO_4H_DO_30KM';
    const MIEJSKI_DO_4H_DO_40KM = 'MIEJSKI_DO_4H_DO_40KM';
    const KRAJOWY = 'KRAJOWY';
    const BEZPOSREDNI_DO_20KG = 'BEZPOSREDNI_DO_20KG';
    const BEZPOSREDNI_OD_20KG_DO_30KG = 'BEZPOSREDNI_OD_20KG_DO_30KG';
    const BEZPOSREDNI_OD_30KG_DO_100KG = 'BEZPOSREDNI_OD_30KG_DO_100KG';
    const EKSPRES24 = 'EKSPRES24';
}

class opakowanieKurierskaType
{
    const FIRMOWA_DO_1KG = 'FIRMOWA_DO_1KG';
}

class zwrotDokumentowPaczkowaType
{
    const EKSPRES24 = 'EKSPRES24';
    const PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
    const LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
    const LIST_ZWYKLY_EKONOMICZNY = 'LIST_ZWYKLY_EKONOMICZNY';
    const LIST_POLECONY_PRIORYTETOWY = 'LIST_POLECONY_PRIORYTETOWY';
    const LIST_POLECONY_EKONOMICZNY = 'LIST_POLECONY_EKONOMICZNY';
}

class potwierdzenieOdbioruPaczkowaType
{
    public $ilosc; // iloscPotwierdzenOdbioruType
    public $sposob; // sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType
}

class sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType
{
    const EKSPRES24 = 'EKSPRES24';
    const PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
    const LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
}

class zwrotDokumentowKurierskaType
{
    public $rodzajPocztex; // terminZwrotDokumentowKurierskaType
    public $rodzajPaczka; // terminZwrotDokumentowPaczkowaType
    public $rodzajList; // rodzajListType
}

class terminZwrotDokumentowKurierskaType
{
    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const BEZPOSREDNI_DO_20KG = 'BEZPOSREDNI_DO_20KG';
    const EKSPRES24 = 'EKSPRES24';
}

class terminZwrotDokumentowPaczkowaType
{
    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
}

class potwierdzenieOdbioruKurierskaType
{
    public $ilosc; // iloscPotwierdzenOdbioruType
    public $sposob; // sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType
}

class sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType
{
    const MIEJSKI_DO_3H_DO_5KM = 'MIEJSKI_DO_3H_DO_5KM';
    const MIEJSKI_DO_3H_DO_10KM = 'MIEJSKI_DO_3H_DO_10KM';
    const MIEJSKI_DO_3H_DO_15KM = 'MIEJSKI_DO_3H_DO_15KM';
    const MIEJSKI_DO_3H_POWYZEJ_15KM = 'MIEJSKI_DO_3H_POWYZEJ_15KM';
    const BEZPOSREDNI_DO_20KG = 'BEZPOSREDNI_DO_20KG';
    const EKSPRES24 = 'EKSPRES24';
    const PACZKA_24 = 'PACZKA_24';
    const PACZKA_48 = 'PACZKA_48';
    const LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
}

class addReklamacje
{
    public $reklamowanaPrzesylka; // reklamowanaPrzesylkaType
}

class addReklamacjeResponse
{
    public $error; // errorType
    public $idReklamacja; // string
}

class getReklamacje
{
    public $dataRozpatrzenia; // date
}

class getReklamacjeResponse
{
    public $reklamacja; // reklamacjaRozpatrzonaType
}

class getZapowiedziFaktur
{
    public $data; // date
}

class getZapowiedziFakturResponse
{
    public $zapowiedzFakturyZipFile; // base64Binary
}

class addOdwolanieDoReklamacji
{
    public $reklamacja; // reklamowanaPrzesylkaType
}

class addOdwolanieDoReklamacjiResponse
{
    public $error; // errorType
    public $idReklamacja; // string
}

class addRozbieznoscDoZapowiedziFaktur
{
    public $rozbieznosciZipFile; // base64Binary
}

class addRozbieznoscDoZapowiedziFakturResponse
{
    public $error; // errorType
}

class reklamowanaPrzesylkaType
{
    public $przesylka; // przesylkaType
    public $powodReklamacji; // powodReklamacjiType
    public $dataNadania; // date
    public $urzadNadania; // urzadNadaniaType
    public $powodReklamacjiOpis; // string
    public $odszkodowanie; // int
    public $oplata; // int
}

class powodReklamacjiType
{
    public $powodSzczegolowy; // powodSzczegolowyType
    public $idPowodGlowny; // int
    public $powodGlownyOpis; // string
}

class reklamacjaRozpatrzonaType
{
    public $guid; // guidType
    public $numerNadania; // numerNadaniaType
    public $rozstrzygniecie; // rozstrzygniecieType
    public $przyznaneOdszkodowanie; // int
    public $uzasadnienie; // string
    public $dataRozpatrzenia; // date
    public $nazwaJednostkiRozpatrujacej; // string
    public $osobaRozpatrujaca; // string
    public $idReklamacja; // string
}

class rozstrzygniecieType
{
    const UZASADNIONA = 'UZASADNIONA';
    const NIEUZASADNIONA = 'NIEUZASADNIONA';
    const NIEWNIESIONA = 'NIEWNIESIONA';
}

class getListaPowodowReklamacji
{
}

class getListaPowodowReklamacjiResponse
{
    public $kategoriePowodowReklamacji; // kategoriePowodowReklamacjiType
}

class powodSzczegolowyType
{
    public $idPowodSzczegolowy; // int
    public $powodSzczegolowyOpis; // string
}

class kategoriePowodowReklamacjiType
{
    public $nazwa; // string
    public $powodReklamacji; // powodReklamacjiType
}

class listBiznesowyType
{
    public $masa; // masaType
}

class zamowKuriera
{
    public $miejsceOdbioru; // adresType
    public $nadawca; // adresType
    public $oczekiwanaDataOdbioru; // string
    public $oczekiwanaGodzinaOdbioru; // string
    public $szacowanaIloscPrzeslek; // string
    public $szacowanaLacznaMasaPrzesylek; // string
}

class zamowKurieraResponse
{
    public $error; // errorType
}

class getEZDOList
{
}

class getEZDOListResponse
{
    public $EZDOPakiet; // EZDOPakietType
}

class getEZDO
{
    public $idEZDOPakiet; // int
}

class getEZDOResponse
{
    public $adres; // adresType
    public $przesylka; // EZDOPrzesylkaType
    public $error; // errorType
    public $numerKD; // string
    public $numerEZDO; // string
}

class EZDOPakietType
{
    public $idEZDOPakiet; // int
    public $exported; // date
    public $idEZDOFile; // string
}

class EZDOPrzesylkaType
{
    public $numerNadania; // numerNadaniaType
    public $rodzaj; // string
    public $kategoria; // kategoriaType
    public $masa; // masaType
    public $wartosc; // wartoscType
    public $kwotaPobrania; // kwotaPobraniaType
    public $numerWewnetrznyPrzesylki; // string
    public $zwrot; // string
}

class wplataCKPType
{
    public $unikalnyIdentyfikatorWplaty; // string
    public $numerNadania; // numerNadaniaType
    public $kwota; // int
    public $dataPobrania; // date
    public $dataPrzelewu; // date
    public $idUmowy; // int
    public $tytulPrzelewuZbiorczego; // string
}

class getWplatyCKP
{
    public $numerNadania; // numerNadaniaType
    public $startDate; // date
    public $stopDate; // date
}

class getWplatyCKPResponse
{
    public $wplaty; // wplataCKPType
    public $error; // errorType
}

class globalExpresType
{
    public $ubezpieczenie; // ubezpieczenieType
    public $potwierdzenieDoreczenia; // potwierdzenieDoreczeniaType
    public $masa; // masaType
    public $posteRestante; // boolean
    public $zawartosc; // string
    public $kategoria; // kategoriaType
    public $numerPrzesylkiKlienta; // string
}

class cancelReklamacja
{
    public $idRelkamacja; // int
}

class cancelReklamacjaResponse
{
    public $error; // errorType
}

class zalacznikDoReklamacjiType
{
    public $fileContent; // base64Binary
    public $fileName; // string
    public $fileDesc; // string
}

class addZalacznikDoReklamacji
{
    public $idReklamacja; // string
    public $zalacznik; // zalacznikDoReklamacjiType
}

class addZalacznikDoReklamacjiResponse
{
    public $error; // errorType
}

/**
 * ElektronicznyNadawca class
 * @author {author}
 * @copyright {copyright}
 * @package {package}
 */
class ElektronicznyNadawca extends \SoapClient
{
    private static $classmap = array(
        'addShipment' => 'addShipment',
        'addShipmentResponse' => 'addShipmentResponse',
        'przesylkaType' => 'przesylkaType',
        'pocztexKrajowyType' => 'pocztexKrajowyType',
        'umowaType' => 'umowaType',
        'masaType' => 'masaType',
        'numerNadaniaType' => 'numerNadaniaType',
        'changePassword' => 'changePassword',
        'changePasswordResponse' => 'changePasswordResponse',
        'terminRodzajType' => 'terminRodzajType',
        'uiszczaOplateType' => 'uiszczaOplateType',
        'wartoscType' => 'wartoscType',
        'kwotaPobraniaType' => 'kwotaPobraniaType',
        'sposobPobraniaType' => 'sposobPobraniaType',
        'sposobPrzekazaniaType' => 'sposobPrzekazaniaType',
        'sposobDoreczeniaPotwierdzeniaType' => 'sposobDoreczeniaPotwierdzeniaType',
        'iloscPotwierdzenOdbioruType' => 'iloscPotwierdzenOdbioruType',
        'dataDlaDostarczeniaType' => 'dataDlaDostarczeniaType',
        'razemType' => 'razemType',
        'nazwaType' => 'nazwaType',
        'nazwa2Type' => 'nazwa2Type',
        'ulicaType' => 'ulicaType',
        'numerDomuType' => 'numerDomuType',
        'numerLokaluType' => 'numerLokaluType',
        'miejscowoscType' => 'miejscowoscType',
        'kodPocztowyType' => 'kodPocztowyType',
        'paczkaPocztowaType' => 'paczkaPocztowaType',
        'kategoriaType' => 'kategoriaType',
        'gabarytType' => 'gabarytType',
        'paczkaPocztowaPLUSType' => 'paczkaPocztowaPLUSType',
        'przesylkaPobraniowaType' => 'przesylkaPobraniowaType',
        'przesylkaNaWarunkachSzczegolnychType' => 'przesylkaNaWarunkachSzczegolnychType',
        'przesylkaPoleconaKrajowaType' => 'przesylkaPoleconaKrajowaType',
        'przesylkaHandlowaType' => 'przesylkaHandlowaType',
        'przesylkaListowaZadeklarowanaWartoscType' => 'przesylkaListowaZadeklarowanaWartoscType',
        'przesylkaFullType' => 'przesylkaFullType',
        'errorType' => 'errorType',
        'adresType' => 'adresType',
        'sendEnvelope' => 'sendEnvelope',
        'sendEnvelopeResponseType' => 'sendEnvelopeResponseType',
        'urzadNadaniaType' => 'urzadNadaniaType',
        'getUrzedyNadania' => 'getUrzedyNadania',
        'getUrzedyNadaniaResponse' => 'getUrzedyNadaniaResponse',
        'clearEnvelope' => 'clearEnvelope',
        'clearEnvelopeResponse' => 'clearEnvelopeResponse',
        'urzadNadaniaFullType' => 'urzadNadaniaFullType',
        'guidType' => 'guidType',
        'ePrzesylkaType' => 'ePrzesylkaType',
        'eSposobPowiadomieniaType' => 'eSposobPowiadomieniaType',
        'eKontaktType' => 'eKontaktType',
        'urzadWydaniaEPrzesylkiType' => 'urzadWydaniaEPrzesylkiType',
        'pobranieType' => 'pobranieType',
        'anonymous52' => 'anonymous52',
        'anonymous53' => 'anonymous53',
        'przesylkaPoleconaZagranicznaType' => 'przesylkaPoleconaZagranicznaType',
        'przesylkaZadeklarowanaWartoscZagranicznaType' => 'przesylkaZadeklarowanaWartoscZagranicznaType',
        'krajType' => 'krajType',
        'getUrzedyWydajaceEPrzesylki' => 'getUrzedyWydajaceEPrzesylki',
        'getUrzedyWydajaceEPrzesylkiResponse' => 'getUrzedyWydajaceEPrzesylkiResponse',
        'uploadIWDContent' => 'uploadIWDContent',
        'getEnvelopeStatus' => 'getEnvelopeStatus',
        'getEnvelopeStatusResponse' => 'getEnvelopeStatusResponse',
        'envelopeStatusType' => 'envelopeStatusType',
        'downloadIWDContent' => 'downloadIWDContent',
        'downloadIWDContentResponse' => 'downloadIWDContentResponse',
        'przesylkaShortType' => 'przesylkaShortType',
        'addShipmentResponseItemType' => 'addShipmentResponseItemType',
        'getKarty' => 'getKarty',
        'getKartyResponse' => 'getKartyResponse',
        'getPasswordExpiredDate' => 'getPasswordExpiredDate',
        'getPasswordExpiredDateResponse' => 'getPasswordExpiredDateResponse',
        'setAktywnaKarta' => 'setAktywnaKarta',
        'setAktywnaKartaResponse' => 'setAktywnaKartaResponse',
        'getEnvelopeContentFull' => 'getEnvelopeContentFull',
        'getEnvelopeContentFullResponse' => 'getEnvelopeContentFullResponse',
        'getEnvelopeContentShort' => 'getEnvelopeContentShort',
        'getEnvelopeContentShortResponse' => 'getEnvelopeContentShortResponse',
        'hello' => 'hello',
        'helloResponse' => 'helloResponse',
        'kartaType' => 'kartaType',
        'telefonType' => 'telefonType',
        'getAddressLabel' => 'getAddressLabel',
        'getAddressLabelResponse' => 'getAddressLabelResponse',
        'addressLabelContent' => 'addressLabelContent',
        'getOutboxBook' => 'getOutboxBook',
        'getOutboxBookResponse' => 'getOutboxBookResponse',
        'getFirmowaPocztaBook' => 'getFirmowaPocztaBook',
        'getFirmowaPocztaBookResponse' => 'getFirmowaPocztaBookResponse',
        'getEnvelopeList' => 'getEnvelopeList',
        'getEnvelopeListResponse' => 'getEnvelopeListResponse',
        'envelopeInfoType' => 'envelopeInfoType',
        'przesylkaZagranicznaType' => 'przesylkaZagranicznaType',
        'przesylkaRejestrowanaType' => 'przesylkaRejestrowanaType',
        'przesylkaNieRejestrowanaType' => 'przesylkaNieRejestrowanaType',
        'anonymous94' => 'anonymous94',
        'przesylkaBiznesowaType' => 'przesylkaBiznesowaType',
        'gabarytBiznesowaType' => 'gabarytBiznesowaType',
        'subPrzesylkaBiznesowaType' => 'subPrzesylkaBiznesowaType',
        'subPrzesylkaBiznesowaPlusType' => 'subPrzesylkaBiznesowaPlusType',
        'getAddresLabelByGuid' => 'getAddresLabelByGuid',
        'getAddresLabelByGuidResponse' => 'getAddresLabelByGuidResponse',
        'przesylkaBiznesowaPlusType' => 'przesylkaBiznesowaPlusType',
        'opisType' => 'opisType',
        'numerPrzesylkiKlientaType' => 'numerPrzesylkiKlientaType',
        'pakietType' => 'pakietType',
        'opakowanieType' => 'opakowanieType',
        'typOpakowaniaType' => 'typOpakowaniaType',
        'getPlacowkiPocztowe' => 'getPlacowkiPocztowe',
        'getPlacowkiPocztoweResponse' => 'getPlacowkiPocztoweResponse',
        'getGuid' => 'getGuid',
        'getGuidResponse' => 'getGuidResponse',
        'kierunekType' => 'kierunekType',
        'getKierunki' => 'getKierunki',
        'prefixKodPocztowy' => 'prefixKodPocztowy',
        'getKierunkiResponse' => 'getKierunkiResponse',
        'czynnoscUpustowaType' => 'czynnoscUpustowaType',
        'miejsceOdbioruType' => 'miejsceOdbioruType',
        'sposobNadaniaType' => 'sposobNadaniaType',
        'getKierunkiInfo' => 'getKierunkiInfo',
        'getKierunkiInfoResponse' => 'getKierunkiInfoResponse',
        'kwotaTranzakcjiType' => 'kwotaTranzakcjiType',
        'uslugiType' => 'uslugiType',
        'idWojewodztwoType' => 'idWojewodztwoType',
        'placowkaPocztowaType' => 'placowkaPocztowaType',
        'anonymous124' => 'anonymous124',
        'anonymous125' => 'anonymous125',
        'punktWydaniaPrzesylkiBiznesowejPlus' => 'punktWydaniaPrzesylkiBiznesowejPlus',
        'statusType' => 'statusType',
        'terminRodzajPlusType' => 'terminRodzajPlusType',
        'typOpakowanieType' => 'typOpakowanieType',
        'getEnvelopeBufor' => 'getEnvelopeBufor',
        'getEnvelopeBuforResponse' => 'getEnvelopeBuforResponse',
        'clearEnvelopeByGuids' => 'clearEnvelopeByGuids',
        'clearEnvelopeByGuidsResponse' => 'clearEnvelopeByGuidsResponse',
        'zwrotDokumentowType' => 'zwrotDokumentowType',
        'odbiorPrzesylkiOdNadawcyType' => 'odbiorPrzesylkiOdNadawcyType',
        'potwierdzenieDoreczeniaType' => 'potwierdzenieDoreczeniaType',
        'rodzajListType' => 'rodzajListType',
        'potwierdzenieOdbioruType' => 'potwierdzenieOdbioruType',
        'sposobPrzekazaniaPotwierdzeniaOdbioruType' => 'sposobPrzekazaniaPotwierdzeniaOdbioruType',
        'doreczenieType' => 'doreczenieType',
        'doreczenieUslugaPocztowaType' => 'doreczenieUslugaPocztowaType',
        'doreczenieUslugaKurierskaType' => 'doreczenieUslugaKurierskaType',
        'oczekiwanaGodzinaDoreczeniaType' => 'oczekiwanaGodzinaDoreczeniaType',
        'oczekiwanaGodzinaDoreczeniaUslugiType' => 'oczekiwanaGodzinaDoreczeniaUslugiType',
        'paczkaZagranicznaType' => 'paczkaZagranicznaType',
        'setEnvelopeBuforDataNadania' => 'setEnvelopeBuforDataNadania',
        'setEnvelopeBuforDataNadaniaResponse' => 'setEnvelopeBuforDataNadaniaResponse',
        'lokalizacjaGeograficznaType' => 'lokalizacjaGeograficznaType',
        'wspolrzednaGeograficznaType' => 'wspolrzednaGeograficznaType',
        'zwrotType' => 'zwrotType',
        'sposobZwrotuType' => 'sposobZwrotuType',
        'listZwyklyType' => 'listZwyklyType',
        'reklamowaType' => 'reklamowaType',
        'getEPOStatus' => 'getEPOStatus',
        'getEPOStatusResponse' => 'getEPOStatusResponse',
        'statusEPOEnum' => 'statusEPOEnum',
        'EPOType' => 'EPOType',
        'EPOSimpleType' => 'EPOSimpleType',
        'EPOExtendedType' => 'EPOExtendedType',
        'zasadySpecjalneEnum' => 'zasadySpecjalneEnum',
        'przesylkaEPOType' => 'przesylkaEPOType',
        'przesylkaFirmowaPoleconaType' => 'przesylkaFirmowaPoleconaType',
        'EPOInfoType' => 'EPOInfoType',
        'awizoPrzesylkiType' => 'awizoPrzesylkiType',
        'doreczeniePrzesylkiType' => 'doreczeniePrzesylkiType',
        'zwrotPrzesylkiType' => 'zwrotPrzesylkiType',
        'miejscaPozostawieniaAwizoEnum' => 'miejscaPozostawieniaAwizoEnum',
        'podmiotDoreczeniaEnum' => 'podmiotDoreczeniaEnum',
        'przyczynaZwrotuEnum' => 'przyczynaZwrotuEnum',
        'getAddresLabelCompact' => 'getAddresLabelCompact',
        'getAddresLabelCompactResponse' => 'getAddresLabelCompactResponse',
        'getAddresLabelByGuidCompact' => 'getAddresLabelByGuidCompact',
        'getAddresLabelByGuidCompactResponse' => 'getAddresLabelByGuidCompactResponse',
        'ubezpieczenieType' => 'ubezpieczenieType',
        'rodzajUbezpieczeniaType' => 'rodzajUbezpieczeniaType',
        'kwotaUbezpieczeniaType' => 'kwotaUbezpieczeniaType',
        'emailType' => 'emailType',
        'mobileType' => 'mobileType',
        'EMSType' => 'EMSType',
        'EMSTypOpakowaniaType' => 'EMSTypOpakowaniaType',
        'getEnvelopeBuforList' => 'getEnvelopeBuforList',
        'getEnvelopeBuforListResponse' => 'getEnvelopeBuforListResponse',
        'buforType' => 'buforType',
        'createEnvelopeBufor' => 'createEnvelopeBufor',
        'createEnvelopeBuforResponse' => 'createEnvelopeBuforResponse',
        'moveShipments' => 'moveShipments',
        'moveShipmentsResponse' => 'moveShipmentsResponse',
        'updateEnvelopeBufor' => 'updateEnvelopeBufor',
        'updateEnvelopeBuforResponse' => 'updateEnvelopeBuforResponse',
        'getUbezpieczeniaInfo' => 'getUbezpieczeniaInfo',
        'getUbezpieczeniaInfoResponse' => 'getUbezpieczeniaInfoResponse',
        'ubezpieczeniaInfoType' => 'ubezpieczeniaInfoType',
        'isMiejscowa' => 'isMiejscowa',
        'isMiejscowaResponse' => 'isMiejscowaResponse',
        'trasaRequestType' => 'trasaRequestType',
        'trasaResponseType' => 'trasaResponseType',
        'deklaracjaCelnaType' => 'deklaracjaCelnaType',
        'szczegolyDeklaracjiCelnejType' => 'szczegolyDeklaracjiCelnejType',
        'przesylkaPaletowaType' => 'przesylkaPaletowaType',
        'rodzajPaletyType' => 'rodzajPaletyType',
        'paletaType' => 'paletaType',
        'platnikType' => 'platnikType',
        'subPrzesylkaPaletowaType' => 'subPrzesylkaPaletowaType',
        'getBlankietPobraniaByGuids' => 'getBlankietPobraniaByGuids',
        'getBlankietPobraniaByGuidsResponse' => 'getBlankietPobraniaByGuidsResponse',
        'updateAccount' => 'updateAccount',
        'updateAccountResponse' => 'updateAccountResponse',
        'accountType' => 'accountType',
        'permisionType' => 'permisionType',
        'getAccountList' => 'getAccountList',
        'getAccountListResponse' => 'getAccountListResponse',
        'profilType' => 'profilType',
        'getProfilList' => 'getProfilList',
        'getProfilListResponse' => 'getProfilListResponse',
        'updateProfil' => 'updateProfil',
        'updateProfilResponse' => 'updateProfilResponse',
        'statusAccountType' => 'statusAccountType',
        'uslugaPaczkowaType' => 'uslugaPaczkowaType',
        'subUslugaPaczkowaType' => 'subUslugaPaczkowaType',
        'terminPaczkowaType' => 'terminPaczkowaType',
        'opakowaniePocztowaType' => 'opakowaniePocztowaType',
        'uslugaKurierskaType' => 'uslugaKurierskaType',
        'subUslugaKurierskaType' => 'subUslugaKurierskaType',
        'createAccount' => 'createAccount',
        'createAccountResponse' => 'createAccountResponse',
        'createProfil' => 'createProfil',
        'createProfilResponse' => 'createProfilResponse',
        'terminKurierskaType' => 'terminKurierskaType',
        'opakowanieKurierskaType' => 'opakowanieKurierskaType',
        'zwrotDokumentowPaczkowaType' => 'zwrotDokumentowPaczkowaType',
        'potwierdzenieOdbioruPaczkowaType' => 'potwierdzenieOdbioruPaczkowaType',
        'sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType' => 'sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType',
        'zwrotDokumentowKurierskaType' => 'zwrotDokumentowKurierskaType',
        'terminZwrotDokumentowKurierskaType' => 'terminZwrotDokumentowKurierskaType',
        'terminZwrotDokumentowPaczkowaType' => 'terminZwrotDokumentowPaczkowaType',
        'potwierdzenieOdbioruKurierskaType' => 'potwierdzenieOdbioruKurierskaType',
        'sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType' => 'sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType',
        'addReklamacje' => 'addReklamacje',
        'addReklamacjeResponse' => 'addReklamacjeResponse',
        'getReklamacje' => 'getReklamacje',
        'getReklamacjeResponse' => 'getReklamacjeResponse',
        'getZapowiedziFaktur' => 'getZapowiedziFaktur',
        'getZapowiedziFakturResponse' => 'getZapowiedziFakturResponse',
        'addOdwolanieDoReklamacji' => 'addOdwolanieDoReklamacji',
        'addOdwolanieDoReklamacjiResponse' => 'addOdwolanieDoReklamacjiResponse',
        'addRozbieznoscDoZapowiedziFaktur' => 'addRozbieznoscDoZapowiedziFaktur',
        'addRozbieznoscDoZapowiedziFakturResponse' => 'addRozbieznoscDoZapowiedziFakturResponse',
        'reklamowanaPrzesylkaType' => 'reklamowanaPrzesylkaType',
        'powodReklamacjiType' => 'powodReklamacjiType',
        'reklamacjaRozpatrzonaType' => 'reklamacjaRozpatrzonaType',
        'rozstrzygniecieType' => 'rozstrzygniecieType',
        'getListaPowodowReklamacji' => 'getListaPowodowReklamacji',
        'getListaPowodowReklamacjiResponse' => 'getListaPowodowReklamacjiResponse',
        'powodSzczegolowyType' => 'powodSzczegolowyType',
        'kategoriePowodowReklamacjiType' => 'kategoriePowodowReklamacjiType',
        'listBiznesowyType' => 'listBiznesowyType',
        'zamowKuriera' => 'zamowKuriera',
        'zamowKurieraResponse' => 'zamowKurieraResponse',
        'getEZDOList' => 'getEZDOList',
        'getEZDOListResponse' => 'getEZDOListResponse',
        'getEZDO' => 'getEZDO',
        'getEZDOResponse' => 'getEZDOResponse',
        'EZDOPakietType' => 'EZDOPakietType',
        'EZDOPrzesylkaType' => 'EZDOPrzesylkaType',
        'wplataCKPType' => 'wplataCKPType',
        'getWplatyCKP' => 'getWplatyCKP',
        'getWplatyCKPResponse' => 'getWplatyCKPResponse',
        'globalExpresType' => 'globalExpresType',
        'cancelReklamacja' => 'cancelReklamacja',
        'cancelReklamacjaResponse' => 'cancelReklamacjaResponse',
        'zalacznikDoReklamacjiType' => 'zalacznikDoReklamacjiType',
        'addZalacznikDoReklamacji' => 'addZalacznikDoReklamacji',
        'addZalacznikDoReklamacjiResponse' => 'addZalacznikDoReklamacjiResponse'
    );

    public function __construct($wsdl = "en.wsdl", $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
    }

    /**
     *
     * @param addShipment $parameters
     * @return addShipmentResponse
     */
    public function addShipment(addShipment $parameters)
    {
        return $this->__soapCall('addShipment', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param sendEnvelope $parameters
     * @return sendEnvelopeResponseType
     */
    public function sendEnvelope(sendEnvelope $parameters)
    {
        return $this->__soapCall('sendEnvelope', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEnvelopeBufor $parameters
     * @return getEnvelopeBuforResponse
     */
    public function getEnvelopeBufor(getEnvelopeBufor $parameters)
    {
        return $this->__soapCall('getEnvelopeBufor', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEnvelopeBuforList $parameters
     * @return getEnvelopeBuforListResponse
     */
    public function getEnvelopeBuforList(getEnvelopeBuforList $parameters)
    {
        return $this->__soapCall('getEnvelopeBuforList', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param createEnvelopeBufor $parameters
     * @return createEnvelopeBuforResponse
     */
    public function createEnvelopeBufor(createEnvelopeBufor $parameters)
    {
        return $this->__soapCall('createEnvelopeBufor', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param updateEnvelopeBufor $parameters
     * @return updateEnvelopeBuforResponse
     */
    public function updateEnvelopeBufor(updateEnvelopeBufor $parameters)
    {
        return $this->__soapCall('updateEnvelopeBufor', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param clearEnvelopeByGuids $parameters
     * @return clearEnvelopeByGuidsResponse
     */
    public function clearEnvelopeByGuids(clearEnvelopeByGuids $parameters)
    {
        return $this->__soapCall('clearEnvelopeByGuids', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param clearEnvelope $parameters
     * @return clearEnvelopeResponse
     */
    public function clearEnvelope(clearEnvelope $parameters)
    {
        return $this->__soapCall('clearEnvelope', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param moveShipments $parameters
     * @return moveShipmentsResponse
     */
    public function moveShipments(moveShipments $parameters)
    {
        return $this->__soapCall('moveShipments', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getAddressLabel $parameters
     * @return getAddressLabelResponse
     */
    public function getAddressLabel(getAddressLabel $parameters)
    {
        return $this->__soapCall('getAddressLabel', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getAddresLabelCompact $parameters
     * @return getAddresLabelCompactResponse
     */
    public function getAddresLabelCompact(getAddresLabelCompact $parameters)
    {
        return $this->__soapCall('getAddresLabelCompact', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getOutboxBook $parameters
     * @return getOutboxBookResponse
     */
    public function getOutboxBook(getOutboxBook $parameters)
    {
        return $this->__soapCall('getOutboxBook', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getFirmowaPocztaBook $parameters
     * @return getFirmowaPocztaBookResponse
     */
    public function getFirmowaPocztaBook(getFirmowaPocztaBook $parameters)
    {
        return $this->__soapCall('getFirmowaPocztaBook', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEnvelopeStatus $parameters
     * @return getEnvelopeStatusResponse
     */
    public function getEnvelopeStatus(getEnvelopeStatus $parameters)
    {
        return $this->__soapCall('getEnvelopeStatus', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEnvelopeList $parameters
     * @return getEnvelopeListResponse
     */
    public function getEnvelopeList(getEnvelopeList $parameters)
    {
        return $this->__soapCall('getEnvelopeList', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEnvelopeContentShort $parameters
     * @return getEnvelopeContentShortResponse
     */
    public function getEnvelopeContentShort(getEnvelopeContentShort $parameters)
    {
        return $this->__soapCall('getEnvelopeContentShort', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEnvelopeContentFull $parameters
     * @return getEnvelopeContentFullResponse
     */
    public function getEnvelopeContentFull(getEnvelopeContentFull $parameters)
    {
        return $this->__soapCall('getEnvelopeContentFull', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getKarty $parameters
     * @return getKartyResponse
     */
    public function getKarty(getKarty $parameters)
    {
        return $this->__soapCall('getKarty', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param setAktywnaKarta $parameters
     * @return setAktywnaKartaResponse
     */
    public function setAktywnaKarta(setAktywnaKarta $parameters)
    {
        return $this->__soapCall('setAktywnaKarta', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getUrzedyNadania $parameters
     * @return getUrzedyNadaniaResponse
     */
    public function getUrzedyNadania(getUrzedyNadania $parameters)
    {
        return $this->__soapCall('getUrzedyNadania', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getUrzedyWydajaceEPrzesylki $parameters
     * @return getUrzedyWydajaceEPrzesylkiResponse
     */
    public function getUrzedyWydajaceEPrzesylki(getUrzedyWydajaceEPrzesylki $parameters)
    {
        return $this->__soapCall('getUrzedyWydajaceEPrzesylki', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param uploadIWDContent $parameters
     * @return sendEnvelopeResponseType
     */
    public function uploadIWDContent(uploadIWDContent $parameters)
    {
        return $this->__soapCall('uploadIWDContent', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param downloadIWDContent $parameters
     * @return downloadIWDContentResponse
     */
    public function downloadIWDContent(downloadIWDContent $parameters)
    {
        return $this->__soapCall('downloadIWDContent', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param changePassword $parameters
     * @return changePasswordResponse
     */
    public function changePassword(changePassword $parameters)
    {
        return $this->__soapCall('changePassword', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getPasswordExpiredDate $parameters
     * @return getPasswordExpiredDateResponse
     */
    public function getPasswordExpiredDate(getPasswordExpiredDate $parameters)
    {
        return $this->__soapCall('getPasswordExpiredDate', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param hello $parameters
     * @return helloResponse
     */
    public function hello(hello $parameters)
    {
        return $this->__soapCall('hello', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getAddresLabelByGuid $parameters
     * @return getAddresLabelByGuidResponse
     */
    public function getAddresLabelByGuid(getAddresLabelByGuid $parameters)
    {
        return $this->__soapCall('getAddresLabelByGuid', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getAddresLabelByGuidCompact $parameters
     * @return getAddresLabelByGuidCompactResponse
     */
    public function getAddresLabelByGuidCompact(getAddresLabelByGuidCompact $parameters)
    {
        return $this->__soapCall('getAddresLabelByGuidCompact', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getPlacowkiPocztowe $parameters
     * @return getPlacowkiPocztoweResponse
     */
    public function getPlacowkiPocztowe(getPlacowkiPocztowe $parameters)
    {
        return $this->__soapCall('getPlacowkiPocztowe', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getGuid $parameters
     * @return getGuidResponse
     */
    public function getGuid(getGuid $parameters)
    {
        return $this->__soapCall('getGuid', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getKierunki $parameters
     * @return getKierunkiResponse
     */
    public function getKierunki(getKierunki $parameters)
    {
        return $this->__soapCall('getKierunki', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getKierunkiInfo $parameters
     * @return getKierunkiInfoResponse
     */
    public function getKierunkiInfo(getKierunkiInfo $parameters)
    {
        return $this->__soapCall('getKierunkiInfo', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEPOStatus $parameters
     * @return getEPOStatusResponse
     */
    public function getEPOStatus(getEPOStatus $parameters)
    {
        return $this->__soapCall('getEPOStatus', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param setEnvelopeBuforDataNadania $parameters
     * @return setEnvelopeBuforDataNadaniaResponse
     */
    public function setEnvelopeBuforDataNadania(setEnvelopeBuforDataNadania $parameters)
    {
        return $this->__soapCall('setEnvelopeBuforDataNadania', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getUbezpieczeniaInfo $parameters
     * @return getUbezpieczeniaInfoResponse
     */
    public function getUbezpieczeniaInfo(getUbezpieczeniaInfo $parameters)
    {
        return $this->__soapCall('getUbezpieczeniaInfo', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param isMiejscowa $parameters
     * @return isMiejscowaResponse
     */
    public function isMiejscowa(isMiejscowa $parameters)
    {
        return $this->__soapCall('isMiejscowa', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getBlankietPobraniaByGuids $parameters
     * @return getBlankietPobraniaByGuidsResponse
     */
    public function getBlankietPobraniaByGuids(getBlankietPobraniaByGuids $parameters)
    {
        return $this->__soapCall('getBlankietPobraniaByGuids', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getAccountList $parameters
     * @return getAccountListResponse
     */
    public function getAccountList(getAccountList $parameters)
    {
        return $this->__soapCall('getAccountList', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param createAccount $parameters
     * @return createAccountResponse
     */
    public function createAccount(createAccount $parameters)
    {
        return $this->__soapCall('createAccount', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param updateAccount $parameters
     * @return updateAccountResponse
     */
    public function updateAccount(updateAccount $parameters)
    {
        return $this->__soapCall('updateAccount', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getProfilList $parameters
     * @return getProfilListResponse
     */
    public function getProfilList(getProfilList $parameters)
    {
        return $this->__soapCall('getProfilList', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param createProfil $parameters
     * @return createProfilResponse
     */
    public function createProfil(createProfil $parameters)
    {
        return $this->__soapCall('createProfil', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param updateProfil $parameters
     * @return updateProfilResponse
     */
    public function updateProfil(updateProfil $parameters)
    {
        return $this->__soapCall('updateProfil', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param addReklamacje $parameters
     * @return addReklamacjeResponse
     */
    public function addReklamacje(addReklamacje $parameters)
    {
        return $this->__soapCall('addReklamacje', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param addZalacznikDoReklamacji $parameters
     * @return addZalacznikDoReklamacjiResponse
     */
    public function addZalacznikDoReklamacji(addZalacznikDoReklamacji $parameters)
    {
        return $this->__soapCall('addZalacznikDoReklamacji', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getReklamacje $parameters
     * @return getReklamacjeResponse
     */
    public function getReklamacje(getReklamacje $parameters)
    {
        return $this->__soapCall('getReklamacje', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getZapowiedziFaktur $parameters
     * @return getZapowiedziFakturResponse
     */
    public function getZapowiedziFaktur(getZapowiedziFaktur $parameters)
    {
        return $this->__soapCall('getZapowiedziFaktur', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param addOdwolanieDoReklamacji $parameters
     * @return addOdwolanieDoReklamacjiResponse
     */
    public function addOdwolanieDoReklamacji(addOdwolanieDoReklamacji $parameters)
    {
        return $this->__soapCall('addOdwolanieDoReklamacji', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param cancelReklamacja $parameters
     * @return cancelReklamacjaResponse
     */
    public function cancelReklamacja(cancelReklamacja $parameters)
    {
        return $this->__soapCall('cancelReklamacja', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param addRozbieznoscDoZapowiedziFaktur $parameters
     * @return addRozbieznoscDoZapowiedziFakturResponse
     */
    public function addRozbieznoscDoZapowiedziFaktur(addRozbieznoscDoZapowiedziFaktur $parameters)
    {
        return $this->__soapCall('addRozbieznoscDoZapowiedziFaktur', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getListaPowodowReklamacji $parameters
     * @return getListaPowodowReklamacjiResponse
     */
    public function getListaPowodowReklamacji(getListaPowodowReklamacji $parameters)
    {
        return $this->__soapCall('getListaPowodowReklamacji', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param zamowKuriera $parameters
     * @return zamowKurieraResponse
     */
    public function zamowKuriera(zamowKuriera $parameters)
    {
        return $this->__soapCall('zamowKuriera', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEZDO $parameters
     * @return getEZDOResponse
     */
    public function getEZDO(getEZDO $parameters)
    {
        return $this->__soapCall('getEZDO', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getEZDOList $parameters
     * @return getEZDOListResponse
     */
    public function getEZDOList(getEZDOList $parameters)
    {
        return $this->__soapCall('getEZDOList', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }

    /**
     *
     * @param getWplatyCKP $parameters
     * @return getWplatyCKPResponse
     */
    public function getWplatyCKP(getWplatyCKP $parameters)
    {
        return $this->__soapCall('getWplatyCKP', array(
            $parameters
        ), array(
            'uri' => 'http://e-nadawca.poczta-polska.pl',
            'soapaction' => ''
        ));
    }
}
