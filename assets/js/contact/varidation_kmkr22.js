// JavaScript Document
// フォームの入力チェック
// Copyright (c) Communication Arts 2011
// 2015.11.24	設置

function checkText(){
	  var result = true;


	// エラー用装飾のためのクラスリセット
    $('#last_name').removeClass("inp_error");
    $('#first_name').removeClass("inp_error");
    $('#company').removeClass("inp_error");
    $('#dep').removeClass("inp_error");
    $('#title').removeClass("inp_error");
    $('.industry--01').removeClass("inp_error");
    $('.industry--02').removeClass("inp_error");
    $('#zip').removeClass("inp_error");
    $('.selectBox').removeClass("inp_error");
    $('#city').removeClass("inp_error");
    $('#email').removeClass("inp_error");
    $('#password').removeClass("inp_error");
    $('#phone').removeClass("inp_error");



    // 入力エラー文をリセット
    $("#last_name_error").empty();
    $("#first_name_error").empty();
    $("#company_error").empty();
    $("#dep_error").empty();
    $("#title_error").empty();
    $("#business_error").empty();
    $("#business2_error").empty();
    $("#zip_error").empty();
    $("#state_error").empty();
    $("#city_error").empty();
    $("#email_error").empty();
    $("#password_error").empty();
    $("#phone_error").empty();


    // 入力内容セット
    var last_name   = $("#last_name").val();
    var first_name   = $("#first_name").val();
    var company   = $("#company").val();
    var dep   = $("#dep").val();
    var posi   = $("#posi").val();
    var business   = $("#business").val();
    var zip   = $("#zip").val();
    var state   = $("#state").val();
    var city   = $("#city").val();
    var email   = $("#email").val();
    var password   = $("#password").val();
    var phone   = $("#phone").val();



    // 入力内容チェック
	if(document.mailform.last_name.value==""){
		$("#last_name_error").html(" お名前は必須です。");
		$("#last_name").addClass("inp_error");
		result = false;
	}
	if(document.mailform.first_name.value==""){
		$("#first_name_error").html(" お名前は必須です。");
		$("#first_name").addClass("inp_error");
		result = false;
	}
	if(document.mailform.company.value==""){
		$("#company_error").html("会社・団体名を入力してください。");
		$("#company").addClass("inp_error");
		result = false;
	}
	if(document.mailform.dep.value==""){
		$("#dep_error").html("部署名を入力してください。");
		$("#dep").addClass("inp_error");
		result = false;
	}
	if(document.mailform.title.value==""){
		$("#title_error").html("役職を入力してください。「なし」でも可");
		$("#title").addClass("inp_error");
		result = false;
	}
	if(document.mailform.business.value==""){
		$("#business_error").html("業種をお選びください。");
		$(".industry--01").addClass("inp_error");
		result = false;
	}else if(document.mailform.business.value=="エンドユーザー" && document.mailform.business2.value==""){
		$("#business2_error").html("前項でエンドユーザーを選択された方はこちらも選択してください");
		$(".industry--02").addClass("inp_error");
		result = false;
    }
	if(document.mailform.zip.value==""){
		$("#zip_error").html("郵便番号を入力してください。");
		$("#zip").addClass("inp_error");
		result = false;
	}
	if(document.mailform.state.value=="都道府県をお選びください"){
		$("#state_error").html("都道府県をお選びください。");
		$(".selectBox").addClass("inp_error");
		result = false;
	}
	if(document.mailform.city.value==""){
		$("#city_error").html("住所を入力してください。");
		$("#city").addClass("inp_error");
		result = false;
	}
	if(document.mailform.email.value==""){
		$("#email_error").html(" メールアドレスを入力してください。");
		$("#email").addClass("inp_error");
		result = false;
	}else if(document.mailform.email.value.indexOf("@",0)<0){
		$("#email_error").html(" 正確なメールアドレスを入力してください。");
		$("#email").addClass("inp_error");
		result = false;
	}else if(document.getElementById){
		maildata=document.mailform.email.value;
		maildata2=escape(maildata);
		if(maildata!=maildata2){
			$("#email_error").html(" メールアドレスは半角英数文字のみです。");
			$("#email").addClass("inp_error");
			result = false;
		}
	}
/*
	if(document.mailform.password.value==""){
		$("#password_error").html("パスワードを入力してください。");
		$("#password").addClass("inp_error");
		result = false;
	}
*/
	// if(document.mailform.email.value==""){
	// 	alert("メールアドレスを入力してください");
	// 	return false;
	// }
	if(document.mailform.phone.value==""){
		$("#phone_error").html(" 電話番号を入力してください。");
		$("#phone").addClass("inp_error");
		result = false;
	}

	window.scrollTo( 0, 0 ) ;

	return result;
}


//半角カナチェック関数
function hkCheck(motoText)
{
	txt = "ｱｲｳｴｵｶｷｸｹｺｻｼｽｾｿﾀﾁﾂﾃﾄﾅﾆﾇﾈﾉﾊﾋﾌﾍﾎﾏﾐﾑﾒﾓﾔﾕﾖﾗﾘﾙﾚﾛﾜｦﾝｧｨｩｪｫｬｭｮｯｰ､｡｢｣ﾞﾟ";
	hkflag=0;
	for (i=0; i<motoText.length; i++)
	{
		if (txt.indexOf(motoText.charAt(i),0) >= 0) {hkflag=1;}
	}
	return hkflag;
}



//英数字全角>>半角変換
function z2h(str){
	z = new Array("０","１","２","３","４","５","６","７","８","９","．","＠","－","＿","（","）");
	h = new Array("0","1","2","3","4","5","6","7","8","9",".","@","-","_","(",")");
	for(i=0;i<z.length;i++){
		while(str.indexOf(z[i]) != -1){
			str = str.replace(z[i],h[i]);
		}
	}
	return str;
}
