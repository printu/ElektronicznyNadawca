<?php
namespace PocztaPolska;

/**
 * ElektronicznyNadawca class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class ElektronicznyNadawca extends \SoapClient {

	const WSDL_FILE = "https://en-testwebapi.poczta-polska.pl/websrv/en.wsdl";
	private $classmap = array(
			'addShipment' => '\PocztaPolska\addShipment',
			'addShipmentResponse' => '\PocztaPolska\addShipmentResponse',
			'przesylkaType' => '\PocztaPolska\przesylkaType',
			'pocztexKrajowyType' => '\PocztaPolska\pocztexKrajowyType',
			'umowaType' => '\PocztaPolska\umowaType',
			'masaType' => '\PocztaPolska\masaType',
			'numerNadaniaType' => '\PocztaPolska\numerNadaniaType',
			'changePassword' => '\PocztaPolska\changePassword',
			'changePasswordResponse' => '\PocztaPolska\changePasswordResponse',
			'terminRodzajType' => '\PocztaPolska\terminRodzajType',
			'uiszczaOplateType' => '\PocztaPolska\uiszczaOplateType',
			'wartoscType' => '\PocztaPolska\wartoscType',
			'kwotaPobraniaType' => '\PocztaPolska\kwotaPobraniaType',
			'sposobPobraniaType' => '\PocztaPolska\sposobPobraniaType',
			'sposobPrzekazaniaType' => '\PocztaPolska\sposobPrzekazaniaType',
			'sposobDoreczeniaPotwierdzeniaType' => '\PocztaPolska\sposobDoreczeniaPotwierdzeniaType',
			'iloscPotwierdzenOdbioruType' => '\PocztaPolska\iloscPotwierdzenOdbioruType',
			'dataDlaDostarczeniaType' => '\PocztaPolska\dataDlaDostarczeniaType',
			'razemType' => '\PocztaPolska\razemType',
			'nazwaType' => '\PocztaPolska\nazwaType',
			'nazwa2Type' => '\PocztaPolska\nazwa2Type',
			'ulicaType' => '\PocztaPolska\ulicaType',
			'numerDomuType' => '\PocztaPolska\numerDomuType',
			'numerLokaluType' => '\PocztaPolska\numerLokaluType',
			'miejscowoscType' => '\PocztaPolska\miejscowoscType',
			'kodPocztowyType' => '\PocztaPolska\kodPocztowyType',
			'terminType' => '\PocztaPolska\terminType',
			'sygnaturaType' => '\PocztaPolska\sygnaturaType',
			'rodzajType' => '\PocztaPolska\rodzajType',
			'paczkaPocztowaType' => '\PocztaPolska\paczkaPocztowaType',
			'kategoriaType' => '\PocztaPolska\kategoriaType',
			'gabarytType' => '\PocztaPolska\gabarytType',
			'paczkaPocztowaPLUSType' => '\PocztaPolska\paczkaPocztowaPLUSType',
			'przesylkaPobraniowaType' => '\PocztaPolska\przesylkaPobraniowaType',
			'przesylkaNaWarunkachSzczegolnychType' => '\PocztaPolska\przesylkaNaWarunkachSzczegolnychType',
			'przesylkaPoleconaKrajowaType' => '\PocztaPolska\przesylkaPoleconaKrajowaType',
			'przesylkaHandlowaType' => '\PocztaPolska\przesylkaHandlowaType',
			'przesylkaListowaZadeklarowanaWartoscType' => '\PocztaPolska\przesylkaListowaZadeklarowanaWartoscType',
			'przesylkaFullType' => '\PocztaPolska\przesylkaFullType',
			'errorType' => '\PocztaPolska\errorType',
			'adresType' => '\PocztaPolska\adresType',
			'sendEnvelope' => '\PocztaPolska\sendEnvelope',
			'sendEnvelopeResponseType' => '\PocztaPolska\sendEnvelopeResponseType',
			'urzadNadaniaType' => '\PocztaPolska\urzadNadaniaType',
			'getUrzedyNadania' => '\PocztaPolska\getUrzedyNadania',
			'getUrzedyNadaniaResponse' => '\PocztaPolska\getUrzedyNadaniaResponse',
			'clearEnvelope' => '\PocztaPolska\clearEnvelope',
			'clearEnvelopeResponse' => '\PocztaPolska\clearEnvelopeResponse',
			'urzadNadaniaFullType' => '\PocztaPolska\urzadNadaniaFullType',
			'guidType' => '\PocztaPolska\guidType',
			'ePrzesylkaType' => '\PocztaPolska\ePrzesylkaType',
			'eSposobPowiadomieniaType' => '\PocztaPolska\eSposobPowiadomieniaType',
			'eKontaktType' => '\PocztaPolska\eKontaktType',
			'urzadWydaniaEPrzesylkiType' => '\PocztaPolska\urzadWydaniaEPrzesylkiType',
			'pobranieType' => '\PocztaPolska\pobranieType',
			'anonymous55' => '\PocztaPolska\anonymous55',
			'anonymous56' => '\PocztaPolska\anonymous56',
			'przesylkaPoleconaZagranicznaType' => '\PocztaPolska\przesylkaPoleconaZagranicznaType',
			'przesylkaZadeklarowanaWartoscZagranicznaType' => '\PocztaPolska\przesylkaZadeklarowanaWartoscZagranicznaType',
			'krajType' => '\PocztaPolska\krajType',
			'getUrzedyWydajaceEPrzesylki' => '\PocztaPolska\getUrzedyWydajaceEPrzesylki',
			'getUrzedyWydajaceEPrzesylkiResponse' => '\PocztaPolska\getUrzedyWydajaceEPrzesylkiResponse',
			'uploadIWDContent' => '\PocztaPolska\uploadIWDContent',
			'getEnvelopeStatus' => '\PocztaPolska\getEnvelopeStatus',
			'getEnvelopeStatusResponse' => '\PocztaPolska\getEnvelopeStatusResponse',
			'envelopeStatusType' => '\PocztaPolska\envelopeStatusType',
			'downloadIWDContent' => '\PocztaPolska\AdownloadIWDContent',
			'downloadIWDContentResponse' => '\PocztaPolska\AdownloadIWDContentResponse',
			'przesylkaShortType' => '\PocztaPolska\przesylkaShortType',
			'addShipmentResponseItemType' => '\PocztaPolska\addShipmentResponseItemType',
			'getKarty' => '\PocztaPolska\getKarty',
			'getKartyResponse' => '\PocztaPolska\getKartyResponse',
			'getPasswordExpiredDate' => '\PocztaPolska\getPasswordExpiredDate',
			'getPasswordExpiredDateResponse' => '\PocztaPolska\getPasswordExpiredDateResponse',
			'setAktywnaKarta' => '\PocztaPolska\setAktywnaKarta',
			'setAktywnaKartaResponse' => '\PocztaPolska\setAktywnaKartaResponse',
			'getEnvelopeContentFull' => '\PocztaPolska\getEnvelopeContentFull',
			'getEnvelopeContentFullResponse' => '\PocztaPolska\getEnvelopeContentFullResponse',
			'getEnvelopeContentShort' => '\PocztaPolska\getEnvelopeContentShort',
			'getEnvelopeContentShortResponse' => '\PocztaPolska\getEnvelopeContentShortResponse',
			'hello' => '\PocztaPolska\hello',
			'helloResponse' => '\PocztaPolska\helloResponse',
			'kartaType' => '\PocztaPolska\kartaType',
			'telefonType' => '\PocztaPolska\telefonType',
			'getAddressLabel' => '\PocztaPolska\getAddressLabel',
			'getAddressLabelResponse' => '\PocztaPolska\getAddressLabelResponse',
			'addressLabelContent' => '\PocztaPolska\addressLabelContent',
			'getOutboxBook' => '\PocztaPolska\getOutboxBook',
			'getOutboxBookResponse' => '\PocztaPolska\getOutboxBookResponse',
			'getFirmowaPocztaBook' => '\PocztaPolska\getFirmowaPocztaBook',
			'getFirmowaPocztaBookResponse' => '\PocztaPolska\getFirmowaPocztaBookResponse',
			'getEnvelopeList' => '\PocztaPolska\getEnvelopeList',
			'getEnvelopeListResponse' => '\PocztaPolska\getEnvelopeListResponse',
			'envelopeInfoType' => '\PocztaPolska\envelopeInfoType',
			'przesylkaZagranicznaType' => '\PocztaPolska\przesylkaZagranicznaType',
			'przesylkaRejestrowanaType' => '\PocztaPolska\przesylkaRejestrowanaType',
			'przesylkaNieRejestrowanaType' => '\PocztaPolska\przesylkaNieRejestrowanaType',
			'anonymous97' => '\PocztaPolska\anonymous97',
			'przesylkaBiznesowaType' => '\PocztaPolska\przesylkaBiznesowaType',
			'gabarytBiznesowaType' => '\PocztaPolska\gabarytBiznesowaType',
			'subPrzesylkaBiznesowaType' => '\PocztaPolska\subPrzesylkaBiznesowaType',
			'subPrzesylkaBiznesowaPlusType' => '\PocztaPolska\subPrzesylkaBiznesowaPlusType',
			'getAddresLabelByGuid' => '\PocztaPolska\getAddresLabelByGuid',
			'getAddresLabelByGuidResponse' => '\PocztaPolska\getAddresLabelByGuidResponse',
			'przesylkaBiznesowaPlusType' => '\PocztaPolska\przesylkaBiznesowaPlusType',
			'opisType' => '\PocztaPolska\opisType',
			'numerPrzesylkiKlientaType' => '\PocztaPolska\numerPrzesylkiKlientaType',
			'pakietType' => '\PocztaPolska\pakietType',
			'opakowanieType' => '\PocztaPolska\opakowanieType',
			'typOpakowaniaType' => '\PocztaPolska\typOpakowaniaType',
			'getPlacowkiPocztowe' => '\PocztaPolska\getPlacowkiPocztowe',
			'getPlacowkiPocztoweResponse' => '\PocztaPolska\getPlacowkiPocztoweResponse',
			'getGuid' => '\PocztaPolska\getGuid',
			'getGuidResponse' => '\PocztaPolska\getGuidResponse',
			'kierunekType' => '\PocztaPolska\kierunekType',
			'getKierunki' => '\PocztaPolska\getKierunki',
			'prefixKodPocztowy' => '\PocztaPolska\prefixKodPocztowy',
			'getKierunkiResponse' => '\PocztaPolska\getKierunkiResponse',
			'czynnoscUpustowaType' => '\PocztaPolska\czynnoscUpustowaType',
			'miejsceOdbioruType' => '\PocztaPolska\miejsceOdbioruType',
			'sposobNadaniaType' => '\PocztaPolska\sposobNadaniaType',
			'getKierunkiInfo' => '\PocztaPolska\getKierunkiInfo',
			'getKierunkiInfoResponse' => '\PocztaPolska\getKierunkiInfoResponse',
			'kwotaTranzakcjiType' => '\PocztaPolska\kwotaTranzakcjiType',
			'uslugiType' => '\PocztaPolska\uslugiType',
			'idWojewodztwoType' => '\PocztaPolska\idWojewodztwoType',
			'placowkaPocztowaType' => '\PocztaPolska\placowkaPocztowaType',
			'anonymous127' => '\PocztaPolska\anonymous127',
			'anonymous128' => '\PocztaPolska\anonymous128',
			'punktWydaniaPrzesylkiBiznesowejPlus' => '\PocztaPolska\punktWydaniaPrzesylkiBiznesowejPlus',
			'statusType' => '\PocztaPolska\statusType',
			'terminRodzajPlusType' => '\PocztaPolska\terminRodzajPlusType',
			'typOpakowanieType' => '\PocztaPolska\typOpakowanieType',
			'getEnvelopeBufor' => '\PocztaPolska\getEnvelopeBufor',
			'getEnvelopeBuforResponse' => '\PocztaPolska\getEnvelopeBuforResponse',
			'clearEnvelopeByGuids' => '\PocztaPolska\clearEnvelopeByGuids',
			'clearEnvelopeByGuidsResponse' => '\PocztaPolska\clearEnvelopeByGuidsResponse',
			'zwrotDokumentowType' => '\PocztaPolska\zwrotDokumentowType',
			'odbiorPrzesylkiOdNadawcyType' => '\PocztaPolska\odbiorPrzesylkiOdNadawcyType',
			'potwierdzenieDoreczeniaType' => '\PocztaPolska\potwierdzenieDoreczeniaType',
			'rodzajListType' => '\PocztaPolska\rodzajListType',
			'potwierdzenieOdbioruType' => '\PocztaPolska\potwierdzenieOdbioruType',
			'sposobPrzekazaniaPotwierdzeniaOdbioruType' => '\PocztaPolska\sposobPrzekazaniaPotwierdzeniaOdbioruType',
			'doreczenieType' => '\PocztaPolska\AdoreczenieType',
			'doreczenieUslugaPocztowaType' => '\PocztaPolska\AdoreczenieUslugaPocztowaType',
			'doreczenieUslugaKurierskaType' => '\PocztaPolska\AdoreczenieUslugaKurierskaType',
			'oczekiwanaGodzinaDoreczeniaType' => '\PocztaPolska\oczekiwanaGodzinaDoreczeniaType',
			'oczekiwanaGodzinaDoreczeniaUslugiType' => '\PocztaPolska\oczekiwanaGodzinaDoreczeniaUslugiType',
			'paczkaZagranicznaType' => '\PocztaPolska\paczkaZagranicznaType',
			'setEnvelopeBuforDataNadania' => '\PocztaPolska\setEnvelopeBuforDataNadania',
			'setEnvelopeBuforDataNadaniaResponse' => '\PocztaPolska\setEnvelopeBuforDataNadaniaResponse',
			'lokalizacjaGeograficznaType' => '\PocztaPolska\lokalizacjaGeograficznaType',
			'wspolrzednaGeograficznaType' => '\PocztaPolska\wspolrzednaGeograficznaType',
			'zwrotType' => '\PocztaPolska\zwrotType',
			'sposobZwrotuType' => '\PocztaPolska\sposobZwrotuType',
			'listZwyklyType' => '\PocztaPolska\AlistZwyklyType',
			'listZwyklyFirmowyType' => '\PocztaPolska\AlistZwyklyFirmowyType',
			'reklamowaType' => '\PocztaPolska\reklamowaType',
			'getEPOStatus' => '\PocztaPolska\getEPOStatus',
			'getEPOStatusResponse' => '\PocztaPolska\getEPOStatusResponse',
			'statusEPOEnum' => '\PocztaPolska\statusEPOEnum',
			'EPOType' => '\PocztaPolska\EPOType',
			'EPOSimpleType' => '\PocztaPolska\EPOSimpleType',
			'EPOExtendedType' => '\PocztaPolska\EPOExtendedType',
			'zasadySpecjalneEnum' => '\PocztaPolska\zasadySpecjalneEnum',
			'przesylkaEPOType' => '\PocztaPolska\przesylkaEPOType',
			'przesylkaFirmowaPoleconaType' => '\PocztaPolska\przesylkaFirmowaPoleconaType',
			'EPOInfoType' => '\PocztaPolska\EPOInfoType',
			'awizoPrzesylkiType' => '\PocztaPolska\awizoPrzesylkiType',
			'doreczeniePrzesylkiType' => '\PocztaPolska\AdoreczeniePrzesylkiType',
			'zwrotPrzesylkiType' => '\PocztaPolska\zwrotPrzesylkiType',
			'miejscaPozostawieniaAwizoEnum' => '\PocztaPolska\miejscaPozostawieniaAwizoEnum',
			'podmiotDoreczeniaEnum' => '\PocztaPolska\podmiotDoreczeniaEnum',
			'przyczynaZwrotuEnum' => '\PocztaPolska\przyczynaZwrotuEnum',
			'miejscePozostawieniaZawiadomieniaODoreczeniuEnum' => '\PocztaPolska\miejscePozostawieniaZawiadomieniaODoreczeniuEnum',
			'getAddresLabelCompact' => '\PocztaPolska\getAddresLabelCompact',
			'getAddresLabelCompactResponse' => '\PocztaPolska\getAddresLabelCompactResponse',
			'getAddresLabelByGuidCompact' => '\PocztaPolska\getAddresLabelByGuidCompact',
			'getAddresLabelByGuidCompactResponse' => '\PocztaPolska\getAddresLabelByGuidCompactResponse',
			'ubezpieczenieType' => '\PocztaPolska\ubezpieczenieType',
			'rodzajUbezpieczeniaType' => '\PocztaPolska\rodzajUbezpieczeniaType',
			'kwotaUbezpieczeniaType' => '\PocztaPolska\kwotaUbezpieczeniaType',
			'emailType' => '\PocztaPolska\emailType',
			'mobileType' => '\PocztaPolska\mobileType',
			'EMSType' => '\PocztaPolska\EMSType',
			'EMSTypOpakowaniaType' => '\PocztaPolska\EMSTypOpakowaniaType',
			'getEnvelopeBuforList' => '\PocztaPolska\getEnvelopeBuforList',
			'getEnvelopeBuforListResponse' => '\PocztaPolska\getEnvelopeBuforListResponse',
			'buforType' => '\PocztaPolska\buforType',
			'createEnvelopeBufor' => '\PocztaPolska\createEnvelopeBufor',
			'createEnvelopeBuforResponse' => '\PocztaPolska\createEnvelopeBuforResponse',
			'moveShipments' => '\PocztaPolska\moveShipments',
			'moveShipmentsResponse' => '\PocztaPolska\moveShipmentsResponse',
			'updateEnvelopeBufor' => '\PocztaPolska\updateEnvelopeBufor',
			'updateEnvelopeBuforResponse' => '\PocztaPolska\updateEnvelopeBuforResponse',
			'getUbezpieczeniaInfo' => '\PocztaPolska\getUbezpieczeniaInfo',
			'getUbezpieczeniaInfoResponse' => '\PocztaPolska\getUbezpieczeniaInfoResponse',
			'ubezpieczeniaInfoType' => '\PocztaPolska\ubezpieczeniaInfoType',
			'isMiejscowa' => '\PocztaPolska\isMiejscowa',
			'isMiejscowaResponse' => '\PocztaPolska\isMiejscowaResponse',
			'trasaRequestType' => '\PocztaPolska\trasaRequestType',
			'trasaResponseType' => '\PocztaPolska\trasaResponseType',
			'deklaracjaCelnaType' => '\PocztaPolska\deklaracjaCelnaType',
			'szczegolyDeklaracjiCelnejType' => '\PocztaPolska\szczegolyDeklaracjiCelnejType',
			'przesylkaPaletowaType' => '\PocztaPolska\przesylkaPaletowaType',
			'rodzajPaletyType' => '\PocztaPolska\rodzajPaletyType',
			'paletaType' => '\PocztaPolska\paletaType',
			'platnikType' => '\PocztaPolska\platnikType',
			'subPrzesylkaPaletowaType' => '\PocztaPolska\subPrzesylkaPaletowaType',
			'getBlankietPobraniaByGuids' => '\PocztaPolska\getBlankietPobraniaByGuids',
			'getBlankietPobraniaByGuidsResponse' => '\PocztaPolska\getBlankietPobraniaByGuidsResponse',
			'updateAccount' => '\PocztaPolska\updateAccount',
			'updateAccountResponse' => '\PocztaPolska\updateAccountResponse',
			'accountType' => '\PocztaPolska\accountType',
			'permisionType' => '\PocztaPolska\permisionType',
			'getAccountList' => '\PocztaPolska\getAccountList',
			'getAccountListResponse' => '\PocztaPolska\getAccountListResponse',
			'profilType' => '\PocztaPolska\profilType',
			'getProfilList' => '\PocztaPolska\getProfilList',
			'getProfilListResponse' => '\PocztaPolska\getProfilListResponse',
			'updateProfil' => '\PocztaPolska\updateProfil',
			'updateProfilResponse' => '\PocztaPolska\updateProfilResponse',
			'statusAccountType' => '\PocztaPolska\statusAccountType',
			'uslugaPaczkowaType' => '\PocztaPolska\uslugaPaczkowaType',
			'subUslugaPaczkowaType' => '\PocztaPolska\subUslugaPaczkowaType',
			'terminPaczkowaType' => '\PocztaPolska\terminPaczkowaType',
			'opakowaniePocztowaType' => '\PocztaPolska\opakowaniePocztowaType',
			'uslugaKurierskaType' => '\PocztaPolska\uslugaKurierskaType',
			'subUslugaKurierskaType' => '\PocztaPolska\subUslugaKurierskaType',
			'createAccount' => '\PocztaPolska\createAccount',
			'createAccountResponse' => '\PocztaPolska\createAccountResponse',
			'createProfil' => '\PocztaPolska\createProfil',
			'createProfilResponse' => '\PocztaPolska\createProfilResponse',
			'terminKurierskaType' => '\PocztaPolska\terminKurierskaType',
			'opakowanieKurierskaType' => '\PocztaPolska\opakowanieKurierskaType',
			'zwrotDokumentowPaczkowaType' => '\PocztaPolska\zwrotDokumentowPaczkowaType',
			'potwierdzenieOdbioruPaczkowaType' => '\PocztaPolska\potwierdzenieOdbioruPaczkowaType',
			'sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType' => '\PocztaPolska\sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType',
			'zwrotDokumentowKurierskaType' => '\PocztaPolska\zwrotDokumentowKurierskaType',
			'terminZwrotDokumentowKurierskaType' => '\PocztaPolska\terminZwrotDokumentowKurierskaType',
			'terminZwrotDokumentowPaczkowaType' => '\PocztaPolska\terminZwrotDokumentowPaczkowaType',
			'potwierdzenieOdbioruKurierskaType' => '\PocztaPolska\potwierdzenieOdbioruKurierskaType',
			'sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType' => '\PocztaPolska\sposobPrzekazaniaPotwierdzeniaOdbioruKurierskaType',
			'addReklamacje' => '\PocztaPolska\addReklamacje',
			'addReklamacjeResponse' => '\PocztaPolska\addReklamacjeResponse',
			'getReklamacje' => '\PocztaPolska\getReklamacje',
			'getReklamacjeResponse' => '\PocztaPolska\getReklamacjeResponse',
			'getZapowiedziFaktur' => '\PocztaPolska\getZapowiedziFaktur',
			'getZapowiedziFakturResponse' => '\PocztaPolska\getZapowiedziFakturResponse',
			'addOdwolanieDoReklamacji' => '\PocztaPolska\addOdwolanieDoReklamacji',
			'addOdwolanieDoReklamacjiResponse' => '\PocztaPolska\addOdwolanieDoReklamacjiResponse',
			'addRozbieznoscDoZapowiedziFaktur' => '\PocztaPolska\addRozbieznoscDoZapowiedziFaktur',
			'addRozbieznoscDoZapowiedziFakturResponse' => '\PocztaPolska\addRozbieznoscDoZapowiedziFakturResponse',
			'reklamowanaPrzesylkaType' => '\PocztaPolska\reklamowanaPrzesylkaType',
			'powodReklamacjiType' => '\PocztaPolska\powodReklamacjiType',
			'reklamacjaRozpatrzonaType' => '\PocztaPolska\reklamacjaRozpatrzonaType',
			'rozstrzygniecieType' => '\PocztaPolska\rozstrzygniecieType',
			'getListaPowodowReklamacji' => '\PocztaPolska\getListaPowodowReklamacji',
			'getListaPowodowReklamacjiResponse' => '\PocztaPolska\getListaPowodowReklamacjiResponse',
			'powodSzczegolowyType' => '\PocztaPolska\powodSzczegolowyType',
			'kategoriePowodowReklamacjiType' => '\PocztaPolska\kategoriePowodowReklamacjiType',
			'listBiznesowyType' => '\PocztaPolska\AlistBiznesowyType',
			'zamowKuriera' => '\PocztaPolska\zamowKuriera',
			'zamowKurieraResponse' => '\PocztaPolska\zamowKurieraResponse',
			'getEZDOList' => '\PocztaPolska\getEZDOList',
			'getEZDOListResponse' => '\PocztaPolska\getEZDOListResponse',
			'getEZDO' => '\PocztaPolska\getEZDO',
			'getEZDOResponse' => '\PocztaPolska\getEZDOResponse',
			'EZDOPakietType' => '\PocztaPolska\EZDOPakietType',
			'EZDOPrzesylkaType' => '\PocztaPolska\EZDOPrzesylkaType',
			'wplataCKPType' => '\PocztaPolska\wplataCKPType',
			'getWplatyCKP' => '\PocztaPolska\getWplatyCKP',
			'getWplatyCKPResponse' => '\PocztaPolska\getWplatyCKPResponse',
			'globalExpresType' => '\PocztaPolska\AglobalExpresType',
			'cancelReklamacja' => '\PocztaPolska\cancelReklamacja',
			'cancelReklamacjaResponse' => '\PocztaPolska\cancelReklamacjaResponse',
			'zalacznikDoReklamacjiType' => '\PocztaPolska\zalacznikDoReklamacjiType',
			'addZalacznikDoReklamacji' => '\PocztaPolska\addZalacznikDoReklamacji',
			'addZalacznikDoReklamacjiResponse' => '\PocztaPolska\addZalacznikDoReklamacjiResponse',
			'updateShopEZwroty' => '\PocztaPolska\updateShopEZwroty',
			'updateShopEZwrotyResponse' => '\PocztaPolska\updateShopEZwrotyResponse',
			'shopEZwrotyType' => '\PocztaPolska\shopEZwrotyType',
			'nazwaEZwrotyType' => '\PocztaPolska\nazwaEZwrotyType',
			'statusZgodyEZwrotNameType' => '\PocztaPolska\statusZgodyEZwrotNameType',
			'eZwrotPrzesylkiType' => '\PocztaPolska\eZwrotPrzesylkiType',
			'getListaZgodEZwrotow' => '\PocztaPolska\getListaZgodEZwrotow',
			'getListaZgodEZwrotowResponse' => '\PocztaPolska\getListaZgodEZwrotowResponse',
			'oczekujeNaZgodeEZwrotType' => '\PocztaPolska\oczekujeNaZgodeEZwrotType',
			'nazwaProduktuEZwrotType' => '\PocztaPolska\nazwaProduktuEZwrotType',
			'numerZamowieniaEZwrotType' => '\PocztaPolska\numerZamowieniaEZwrotType',
			'setStatusZgodyNaEZwrot' => '\PocztaPolska\setStatusZgodyNaEZwrot',
			'setStatusZgodyNaEZwrotResponse' => '\PocztaPolska\setStatusZgodyNaEZwrotResponse',
			'statusZgodyEZwrotType' => '\PocztaPolska\statusZgodyEZwrotType',
			'eZwrotTypZgodyType' => '\PocztaPolska\eZwrotTypZgodyType',
			'przesylkaEZwrotPocztexType' => '\PocztaPolska\przesylkaEZwrotPocztexType',
			'przesylkaEZwrotPaczkaType' => '\PocztaPolska\przesylkaEZwrotPaczkaType',
			'nazwaProduktuType' => '\PocztaPolska\nazwaProduktuType',
			'numerZamowieniaType' => '\PocztaPolska\numerZamowieniaType',
			'wyslijLinkaOStatusieEZwrotu' => '\PocztaPolska\wyslijLinkaOStatusieEZwrotu',
			'wyslijLinkaOStatusieEZwrotuResponse' => '\PocztaPolska\wyslijLinkaOStatusieEZwrotuResponse',
			'isObszarMiasto' => '\PocztaPolska\isObszarMiasto',
			'isObszarMiastoResponse' => '\PocztaPolska\isObszarMiastoResponse',
			'obszarAdresowyType' => '\PocztaPolska\obszarAdresowyType',
			'obszarAdresowyResponseType' => '\PocztaPolska\obszarAdresowyResponseType',
			'getPaczkaKorzysciInfo' => '\PocztaPolska\getPaczkaKorzysciInfo',
			'statusPaczkaKorzysciType' => '\PocztaPolska\statusPaczkaKorzysciType',
			'infoPaczkaKorzysciType' => '\PocztaPolska\infoPaczkaKorzysciType',
			'getPaczkaKorzysciInfoResponse' => '\PocztaPolska\getPaczkaKorzysciInfoResponse',
			'reklamacjaInfoType' => '\PocztaPolska\reklamacjaInfoType',
			'setJednostkaOrganizacyjna' => '\PocztaPolska\setJednostkaOrganizacyjna',
			'setJednostkaOrganizacyjnaResponse' => '\PocztaPolska\setJednostkaOrganizacyjnaResponse',
			'jednostkaOrganizacyjnaType' => '\PocztaPolska\jednostkaOrganizacyjnaType',
			'anonymous312' => '\PocztaPolska\anonymous312',
			'anonymous313' => '\PocztaPolska\anonymous313',
			'getJednostkaOrganizacyjna' => '\PocztaPolska\getJednostkaOrganizacyjna',
			'getJednostkaOrganizacyjnaResponse' => '\PocztaPolska\getJednostkaOrganizacyjnaResponse',
			'siecPlacowekEnum' => '\PocztaPolska\siecPlacowekEnum',
			'numerTransakcjiOdbioruType' => '\PocztaPolska\numerTransakcjiOdbioruType',
			);

	public function __construct($wsdl = null, $options = array()) {
		foreach($this->classmap as $key => $value) {
			if(!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if(isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ?: self::WSDL_FILE, $options);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\addShipment $parameters
	 * @return \PocztaPolska\addShipmentResponse
	 */
	public function addShipment(\PocztaPolska\addShipment $parameters) {
		return $this->__soapCall('addShipment', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\changePassword $parameters
	 * @return \PocztaPolska\changePasswordResponse
	 */
	public function changePassword(\PocztaPolska\changePassword $parameters) {
		return $this->__soapCall('changePassword', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\sendEnvelope $parameters
	 * @return \PocztaPolska\sendEnvelopeResponseType
	 */
	public function sendEnvelope(\PocztaPolska\sendEnvelope $parameters) {
		return $this->__soapCall('sendEnvelope', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getUrzedyNadania $parameters
	 * @return \PocztaPolska\getUrzedyNadaniaResponse
	 */
	public function getUrzedyNadania(\PocztaPolska\getUrzedyNadania $parameters) {
		return $this->__soapCall('getUrzedyNadania', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\clearEnvelope $parameters
	 * @return \PocztaPolska\clearEnvelopeResponse
	 */
	public function clearEnvelope(\PocztaPolska\clearEnvelope $parameters) {
		return $this->__soapCall('clearEnvelope', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getUrzedyWydajaceEPrzesylki $parameters
	 * @return \PocztaPolska\getUrzedyWydajaceEPrzesylkiResponse
	 */
	public function getUrzedyWydajaceEPrzesylki(\PocztaPolska\getUrzedyWydajaceEPrzesylki $parameters) {
		return $this->__soapCall('getUrzedyWydajaceEPrzesylki', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\uploadIWDContent $parameters
	 * @return \PocztaPolska\sendEnvelopeResponseType
	 */
	public function uploadIWDContent(\PocztaPolska\uploadIWDContent $parameters) {
		return $this->__soapCall('uploadIWDContent', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEnvelopeStatus $parameters
	 * @return \PocztaPolska\getEnvelopeStatusResponse
	 */
	public function getEnvelopeStatus(\PocztaPolska\getEnvelopeStatus $parameters) {
		return $this->__soapCall('getEnvelopeStatus', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\AdownloadIWDContent $parameters
	 * @return \PocztaPolska\AdownloadIWDContentResponse
	 */
	public function downloadIWDContent(\PocztaPolska\AdownloadIWDContent $parameters) {
		return $this->__soapCall('downloadIWDContent', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getKarty $parameters
	 * @return \PocztaPolska\getKartyResponse
	 */
	public function getKarty(\PocztaPolska\getKarty $parameters) {
		return $this->__soapCall('getKarty', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getPasswordExpiredDate $parameters
	 * @return \PocztaPolska\getPasswordExpiredDateResponse
	 */
	public function getPasswordExpiredDate(\PocztaPolska\getPasswordExpiredDate $parameters) {
		return $this->__soapCall('getPasswordExpiredDate', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\setAktywnaKarta $parameters
	 * @return \PocztaPolska\setAktywnaKartaResponse
	 */
	public function setAktywnaKarta(\PocztaPolska\setAktywnaKarta $parameters) {
		return $this->__soapCall('setAktywnaKarta', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\hello $parameters
	 * @return \PocztaPolska\helloResponse
	 */
	public function hello(\PocztaPolska\hello $parameters) {
		return $this->__soapCall('hello', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEnvelopeContentShort $parameters
	 * @return \PocztaPolska\getEnvelopeContentShortResponse
	 */
	public function getEnvelopeContentShort(\PocztaPolska\getEnvelopeContentShort $parameters) {
		return $this->__soapCall('getEnvelopeContentShort', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEnvelopeContentFull $parameters
	 * @return \PocztaPolska\getEnvelopeContentFullResponse
	 */
	public function getEnvelopeContentFull(\PocztaPolska\getEnvelopeContentFull $parameters) {
		return $this->__soapCall('getEnvelopeContentFull', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getAddressLabel $parameters
	 * @return \PocztaPolska\getAddressLabelResponse
	 */
	public function getAddressLabel(\PocztaPolska\getAddressLabel $parameters) {
		return $this->__soapCall('getAddressLabel', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getOutboxBook $parameters
	 * @return \PocztaPolska\getOutboxBookResponse
	 */
	public function getOutboxBook(\PocztaPolska\getOutboxBook $parameters) {
		return $this->__soapCall('getOutboxBook', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getFirmowaPocztaBook $parameters
	 * @return \PocztaPolska\getFirmowaPocztaBookResponse
	 */
	public function getFirmowaPocztaBook(\PocztaPolska\getFirmowaPocztaBook $parameters) {
		return $this->__soapCall('getFirmowaPocztaBook', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEnvelopeList $parameters
	 * @return \PocztaPolska\getEnvelopeListResponse
	 */
	public function getEnvelopeList(\PocztaPolska\getEnvelopeList $parameters) {
		return $this->__soapCall('getEnvelopeList', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getAddresLabelByGuid $parameters
	 * @return \PocztaPolska\getAddresLabelByGuidResponse
	 */
	public function getAddresLabelByGuid(\PocztaPolska\getAddresLabelByGuid $parameters) {
		return $this->__soapCall('getAddresLabelByGuid', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getPlacowkiPocztowe $parameters
	 * @return \PocztaPolska\getPlacowkiPocztoweResponse
	 */
	public function getPlacowkiPocztowe(\PocztaPolska\getPlacowkiPocztowe $parameters) {
		return $this->__soapCall('getPlacowkiPocztowe', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getGuid $parameters
	 * @return \PocztaPolska\getGuidResponse
	 */
	public function getGuid(\PocztaPolska\getGuid $parameters) {
		return $this->__soapCall('getGuid', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getKierunki $parameters
	 * @return \PocztaPolska\getKierunkiResponse
	 */
	public function getKierunki(\PocztaPolska\getKierunki $parameters) {
		return $this->__soapCall('getKierunki', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getKierunkiInfo $parameters
	 * @return \PocztaPolska\getKierunkiInfoResponse
	 */
	public function getKierunkiInfo(\PocztaPolska\getKierunkiInfo $parameters) {
		return $this->__soapCall('getKierunkiInfo', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEnvelopeBufor $parameters
	 * @return \PocztaPolska\getEnvelopeBuforResponse
	 */
	public function getEnvelopeBufor(\PocztaPolska\getEnvelopeBufor $parameters) {
		return $this->__soapCall('getEnvelopeBufor', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\clearEnvelopeByGuids $parameters
	 * @return \PocztaPolska\clearEnvelopeByGuidsResponse
	 */
	public function clearEnvelopeByGuids(\PocztaPolska\clearEnvelopeByGuids $parameters) {
		return $this->__soapCall('clearEnvelopeByGuids', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\setEnvelopeBuforDataNadania $parameters
	 * @return \PocztaPolska\setEnvelopeBuforDataNadaniaResponse
	 */
	public function setEnvelopeBuforDataNadania(\PocztaPolska\setEnvelopeBuforDataNadania $parameters) {
		return $this->__soapCall('setEnvelopeBuforDataNadania', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEPOStatus $parameters
	 * @return \PocztaPolska\getEPOStatusResponse
	 */
	public function getEPOStatus(\PocztaPolska\getEPOStatus $parameters) {
		return $this->__soapCall('getEPOStatus', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getAddresLabelCompact $parameters
	 * @return \PocztaPolska\getAddresLabelCompactResponse
	 */
	public function getAddresLabelCompact(\PocztaPolska\getAddresLabelCompact $parameters) {
		return $this->__soapCall('getAddresLabelCompact', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getAddresLabelByGuidCompact $parameters
	 * @return \PocztaPolska\getAddresLabelByGuidCompactResponse
	 */
	public function getAddresLabelByGuidCompact(\PocztaPolska\getAddresLabelByGuidCompact $parameters) {
		return $this->__soapCall('getAddresLabelByGuidCompact', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEnvelopeBuforList $parameters
	 * @return \PocztaPolska\getEnvelopeBuforListResponse
	 */
	public function getEnvelopeBuforList(\PocztaPolska\getEnvelopeBuforList $parameters) {
		return $this->__soapCall('getEnvelopeBuforList', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\createEnvelopeBufor $parameters
	 * @return \PocztaPolska\createEnvelopeBuforResponse
	 */
	public function createEnvelopeBufor(\PocztaPolska\createEnvelopeBufor $parameters) {
		return $this->__soapCall('createEnvelopeBufor', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\updateEnvelopeBufor $parameters
	 * @return \PocztaPolska\updateEnvelopeBuforResponse
	 */
	public function updateEnvelopeBufor(\PocztaPolska\updateEnvelopeBufor $parameters) {
		return $this->__soapCall('updateEnvelopeBufor', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\moveShipments $parameters
	 * @return \PocztaPolska\moveShipmentsResponse
	 */
	public function moveShipments(\PocztaPolska\moveShipments $parameters) {
		return $this->__soapCall('moveShipments', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getUbezpieczeniaInfo $parameters
	 * @return \PocztaPolska\getUbezpieczeniaInfoResponse
	 */
	public function getUbezpieczeniaInfo(\PocztaPolska\getUbezpieczeniaInfo $parameters) {
		return $this->__soapCall('getUbezpieczeniaInfo', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\isMiejscowa $parameters
	 * @return \PocztaPolska\isMiejscowaResponse
	 */
	public function isMiejscowa(\PocztaPolska\isMiejscowa $parameters) {
		return $this->__soapCall('isMiejscowa', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getBlankietPobraniaByGuids $parameters
	 * @return \PocztaPolska\getBlankietPobraniaByGuidsResponse
	 */
	public function getBlankietPobraniaByGuids(\PocztaPolska\getBlankietPobraniaByGuids $parameters) {
		return $this->__soapCall('getBlankietPobraniaByGuids', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\updateAccount $parameters
	 * @return \PocztaPolska\updateAccountResponse
	 */
	public function updateAccount(\PocztaPolska\updateAccount $parameters) {
		return $this->__soapCall('updateAccount', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getAccountList $parameters
	 * @return \PocztaPolska\getAccountListResponse
	 */
	public function getAccountList(\PocztaPolska\getAccountList $parameters) {
		return $this->__soapCall('getAccountList', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getProfilList $parameters
	 * @return \PocztaPolska\getProfilListResponse
	 */
	public function getProfilList(\PocztaPolska\getProfilList $parameters) {
		return $this->__soapCall('getProfilList', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\updateProfil $parameters
	 * @return \PocztaPolska\updateProfilResponse
	 */
	public function updateProfil(\PocztaPolska\updateProfil $parameters) {
		return $this->__soapCall('updateProfil', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\createAccount $parameters
	 * @return \PocztaPolska\createAccountResponse
	 */
	public function createAccount(\PocztaPolska\createAccount $parameters) {
		return $this->__soapCall('createAccount', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\createProfil $parameters
	 * @return \PocztaPolska\createProfilResponse
	 */
	public function createProfil(\PocztaPolska\createProfil $parameters) {
		return $this->__soapCall('createProfil', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\addReklamacje $parameters
	 * @return \PocztaPolska\addReklamacjeResponse
	 */
	public function addReklamacje(\PocztaPolska\addReklamacje $parameters) {
		return $this->__soapCall('addReklamacje', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getReklamacje $parameters
	 * @return \PocztaPolska\getReklamacjeResponse
	 */
	public function getReklamacje(\PocztaPolska\getReklamacje $parameters) {
		return $this->__soapCall('getReklamacje', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\addOdwolanieDoReklamacji $parameters
	 * @return \PocztaPolska\addOdwolanieDoReklamacjiResponse
	 */
	public function addOdwolanieDoReklamacji(\PocztaPolska\addOdwolanieDoReklamacji $parameters) {
		return $this->__soapCall('addOdwolanieDoReklamacji', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\cancelReklamacja $parameters
	 * @return \PocztaPolska\cancelReklamacjaResponse
	 */
	public function cancelReklamacja(\PocztaPolska\cancelReklamacja $parameters) {
		return $this->__soapCall('cancelReklamacja', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getZapowiedziFaktur $parameters
	 * @return \PocztaPolska\getZapowiedziFakturResponse
	 */
	public function getZapowiedziFaktur(\PocztaPolska\getZapowiedziFaktur $parameters) {
		return $this->__soapCall('getZapowiedziFaktur', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\addRozbieznoscDoZapowiedziFaktur $parameters
	 * @return \PocztaPolska\addRozbieznoscDoZapowiedziFakturResponse
	 */
	public function addRozbieznoscDoZapowiedziFaktur(\PocztaPolska\addRozbieznoscDoZapowiedziFaktur $parameters) {
		return $this->__soapCall('addRozbieznoscDoZapowiedziFaktur', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getListaPowodowReklamacji $parameters
	 * @return \PocztaPolska\getListaPowodowReklamacjiResponse
	 */
	public function getListaPowodowReklamacji(\PocztaPolska\getListaPowodowReklamacji $parameters) {
		return $this->__soapCall('getListaPowodowReklamacji', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\zamowKuriera $parameters
	 * @return \PocztaPolska\zamowKurieraResponse
	 */
	public function zamowKuriera(\PocztaPolska\zamowKuriera $parameters) {
		return $this->__soapCall('zamowKuriera', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEZDO $parameters
	 * @return \PocztaPolska\getEZDOResponse
	 */
	public function getEZDO(\PocztaPolska\getEZDO $parameters) {
		return $this->__soapCall('getEZDO', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getEZDOList $parameters
	 * @return \PocztaPolska\getEZDOListResponse
	 */
	public function getEZDOList(\PocztaPolska\getEZDOList $parameters) {
		return $this->__soapCall('getEZDOList', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getWplatyCKP $parameters
	 * @return \PocztaPolska\getWplatyCKPResponse
	 */
	public function getWplatyCKP(\PocztaPolska\getWplatyCKP $parameters) {
		return $this->__soapCall('getWplatyCKP', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\addZalacznikDoReklamacji $parameters
	 * @return \PocztaPolska\addZalacznikDoReklamacjiResponse
	 */
	public function addZalacznikDoReklamacji(\PocztaPolska\addZalacznikDoReklamacji $parameters) {
		return $this->__soapCall('addZalacznikDoReklamacji', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\updateShopEZwroty $parameters
	 * @return \PocztaPolska\updateShopEZwrotyResponse
	 */
	public function updateShopEZwroty(\PocztaPolska\updateShopEZwroty $parameters) {
		return $this->__soapCall('updateShopEZwroty', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getListaZgodEZwrotow $parameters
	 * @return \PocztaPolska\getListaZgodEZwrotowResponse
	 */
	public function getListaZgodEZwrotow(\PocztaPolska\getListaZgodEZwrotow $parameters) {
		return $this->__soapCall('getListaZgodEZwrotow', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\setStatusZgodyNaEZwrot $parameters
	 * @return \PocztaPolska\setStatusZgodyNaEZwrotResponse
	 */
	public function setStatusZgodyNaEZwrot(\PocztaPolska\setStatusZgodyNaEZwrot $parameters) {
		return $this->__soapCall('setStatusZgodyNaEZwrot', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\wyslijLinkaOStatusieEZwrotu $parameters
	 * @return \PocztaPolska\wyslijLinkaOStatusieEZwrotuResponse
	 */
	public function wyslijLinkaOStatusieEZwrotu(\PocztaPolska\wyslijLinkaOStatusieEZwrotu $parameters) {
		return $this->__soapCall('wyslijLinkaOStatusieEZwrotu', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\isObszarMiasto $parameters
	 * @return \PocztaPolska\isObszarMiastoResponse
	 */
	public function isObszarMiasto(\PocztaPolska\isObszarMiasto $parameters) {
		return $this->__soapCall('isObszarMiasto', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getPaczkaKorzysciInfo $parameters
	 * @return \PocztaPolska\getPaczkaKorzysciInfoResponse
	 */
	public function getPaczkaKorzysciInfo(\PocztaPolska\getPaczkaKorzysciInfo $parameters) {
		return $this->__soapCall('getPaczkaKorzysciInfo', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\setJednostkaOrganizacyjna $parameters
	 * @return \PocztaPolska\setJednostkaOrganizacyjnaResponse
	 */
	public function setJednostkaOrganizacyjna(\PocztaPolska\setJednostkaOrganizacyjna $parameters) {
		return $this->__soapCall('setJednostkaOrganizacyjna', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

	/**
	 *  
	 *
	 * @param \PocztaPolska\getJednostkaOrganizacyjna $parameters
	 * @return \PocztaPolska\getJednostkaOrganizacyjnaResponse
	 */
	public function getJednostkaOrganizacyjna(\PocztaPolska\getJednostkaOrganizacyjna $parameters) {
		return $this->__soapCall('getJednostkaOrganizacyjna', array($parameters), array(
						'uri' => 'http://e-nadawca.poczta-polska.pl',
						'soapaction' => ''
					)
			);
	}

}


