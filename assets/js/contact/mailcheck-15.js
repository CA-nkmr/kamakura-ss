// JavaScript Document
// フォームの入力チェック
// Copyright (c) Communication Arts 2011
// 2015.11.24	設置

function checkText(){

	if(document.mailform.last_name.value==""){
		alert("お名前を入力して下さい");
		return false;
	}
	if(document.mailform.first_name.value==""){
		alert("お名前を入力して下さい");
		return false;
	}
	if(document.mailform.company.value==""){
		alert("会社・団体名を入力してください");
		return false;
	}
	if(document.mailform.zip.value==""){
		alert("郵便番号を入力してください");
		return false;
	}
	if(document.mailform.state.value=="都道府県をお選び下さい"){
		alert("都道府県を入力してください");
		return false;
	}
	if(document.mailform.city.value==""){
		alert("市区郡を入力してください");
		return false;
	}

	if(document.mailform.email.value==""){
		alert("メールアドレスを入力してください");
		return false;
	}else if(document.mailform.email.value.indexOf("@",0)<0){
		alert("正確なメールアドレスを入力してください。");
		return false;
	}else if(document.getElementById){
		maildata=document.mailform.email.value;
		maildata2=escape(maildata);
		if(maildata!=maildata2){
			alert("メールアドレスは半角英数字で入力してください。");
			return false;
		}
	}
	// if(document.mailform.email.value==""){
	// 	alert("メールアドレスを入力してください");
	// 	return false;
	// }
	if(document.mailform.phone.value==""){
		alert("電話番号を入力してください");
		return false;
	}
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
