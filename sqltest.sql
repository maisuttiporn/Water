CREATE TABLE saleservice_inquiry3(
inquiry_AZEXPLOSIVEOPT	varchar(200),
inquiry_HAZFLAMOPT	varchar(200),
inquiry_HAZFLAMTXT	varchar(200),
inquiry_HAZCORRASOPT	varchar(200),
inquiry_HAZCORRASTXT	varchar(200),
inquiry_HAZREACTIONOPT	varchar(200),
inquiry_HAZREACTIONTXT	varchar(200),
inquiry_HAZCARINOPT	varchar(200),
inquiry_HAZCARINTXT	varchar(200),
inquiry_HAZTOXICOPT	varchar(200),
inquiry_HAZACUTEOPT	varchar(200),
inquiry_HAZCHRONOPT	varchar(200),
inquiry_HAZCHRONTXT	varchar(200),
inquiry_HAZRADIOOPT	varchar(200),
inquiry_HAZRADIOTXT	varchar(200),
inquiry_HAZPESTICIDEOPT	varchar(200),
inquiry_HAZPESTICIDETXT	varchar(200),
inquiry_HAZOTHEROPT	varchar(200),
inquiry_HAZOTHERTXT	varchar(200),
inquiry_GENPROCESSOPT	varchar(200),
inquiry_GENDISCAREOPT	varchar(200),
inquiry_GENOTHEROPT	varchar(200),
inquiry_GENCLEANOPT	varchar(200),
inquiry_GENSPILLOPT	varchar(200),
inquiry_STOCLASSOTP	varchar(200),
inquiry_STOMIXOPT	varchar(200),
inquiry_STOOUTDOOROPT	varchar(200),
inquiry_STOBAGOTP	varchar(200),
inquiry_STOBAGTXT	varchar(200),
inquiry_STODRUMOTP	varchar(200),
inquiry_STODRUMTXT	varchar(200),
inquiry_STOTANKOTP	varchar(200),
inquiry_STOINDOOROTP	varchar(200),
inquiry_STOYARDOTP	varchar(200),
inquiry_STOOTHEROTP	varchar(200),
inquiry_REGNONHARARDOTP	varchar(200),
inquiry_REGHAZARDOTP	varchar(200),
inquiry_PERNECOTP	varchar(200),
inquiry_PERUNNECOTP	varchar(200),
inquiry_DISMETTXT	varchar(200),
inquiry_CLIMTXT	varchar(200),
inquiry_DISCOSTTXT	varchar(200),
inquiry_PRECAUTXT	varchar(200),
inquiry_EMPPROTECTTXT	varchar(200),
inquiry_SYMPTXT	varchar(200)
);



CREATE TABLE saleservice_inquiry4(
FAPTXT varchar(600),
ENVTXT varchar(600),
EMERTXT varchar(600),
OTHERTXT varchar(600),
DETAILTXT varchar(600),
INFOMANTXT varchar(200),
INFOPOSTXT varchar(200),
WMCNAMETXT varchar(200),
CONCACTMANTXT varchar(200),
COMTELTXT varchar(200),
COMFAXTXT varchar(200),
TRANTXT varchar(200),
PRICETXT varchar(200),
COMPINFONAMETXT varchar(200),
COMPPOSTXT varchar(200)
);


CREATE TABLE saleservice_quotaion(
	qt_id varchar(200),
	qt_compname varchar(200),
	qt_compaddr varchar(200),
	qt_comptel varchar(200),
	qt_compfax varchar(200),
	qt_contact varchar(200),
	qt_title varchar(200),
	qt_createby varchar(200)
);

CREATE TABLE saleservice_quotaiondesc(
	qt_id varchar(200),
	qt_desc varchar(200),
	qt_qty varchar(200),
	qt_price varchar(200),
	qt_total varchar(200),
	qt_unit varchar(200)
);

CREATE TABLE workflow (

	msg_id varchar(200),
	msg_body varchar(200),
	msg_type varchar(200),
	msg_approve varchar(200),
	msg_status varchar(200),

	userfrom_id varchar(200),
	userfrom_email varchar(200),
	userfrom_name varchar(200),
	userto_id varchar(200),
	userto_email varchar(200),
	userto_name varchar(200),

	REF1 varchar(200),
	REF2 varchar(200),
	REF3 varchar(200),
	REF4 varchar(200),
	REF5 varchar(200)

);



