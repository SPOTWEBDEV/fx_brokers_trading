// iress login fomr

    function dologin(objForm) {

        webIRESSLoginfp = "https://login.iress.com.au/";

        webIRESSLogin = "https://login.iress.com.au/";

        //fpLiteLogin = "https://investor.iress.com.au/Account/LogOn";

        fpLive = "https://login.iress.com.au/";


        errMsg = "";
        if (objForm.username.value == "") {
            errMsg += "- Please enter username\n";
        }

        if (objForm.username.value == "") {
            errMsg += "- Please enter password\n";
        }

        formaction = "";

        switch (objForm.loginto.selectedIndex) {
            case (0):
                    Alert( "Please Select Platform");
					break;
            case (1):
                document.getElementById("username").getAttributeNode("name").value = 'u';
                document.getElementById("password").getAttributeNode("name").value = 'p';
                if (objForm.u.value.toUpperCase().indexOf("@FPMARKETS") == -1) {
                    objForm.u.value += "@fpmarkets";
                }
                formaction = webIRESSLogin;
                // objForm.product.value = 'webiress';
                objForm.product.value = 'trader';

                break;
            case (2):
               document.getElementById("username").getAttributeNode("name").value = 'u';
                document.getElementById("password").getAttributeNode("name").value = 'p';
                if (objForm.u.value.toUpperCase().indexOf("@FPMARKETS") == -1) {
                    objForm.u.value += "@fpmarkets";
                }
                formaction = webIRESSLogin;
                // objForm.product.value = 'webiress';
                objForm.product.value = 'ViewPoint';

                break;
            case (3):
			 /*
                 document.getElementById("username").getAttributeNode("name").value = 'u';
                document.getElementById("password").getAttributeNode("name").value = 'p';
                if (objForm.u.value.toUpperCase().indexOf("@FPMARKETS") == -1) {
                    objForm.u.value += "@fpmarkets";
                }
                formaction = webIRESSLoginfp;
                objForm.product.value = 'html';
                break;*/
				
				document.getElementById("username").getAttributeNode("name").value = 'UserName';
                document.getElementById("password").getAttributeNode("name").value = 'Password';
                if (objForm.UserName.value.toUpperCase().indexOf("@FPMLive") == -1) {
                    objForm.UserName.value += "@FPMLive";
                }
                objForm.product.value = 'ViewPoint';
                formaction = fpLive;
                break;

          case (4):
                document.getElementById("username").getAttributeNode("name").value = 'UserName';
                document.getElementById("password").getAttributeNode("name").value = 'Password';
                if (objForm.UserName.value.toUpperCase().indexOf("@FPMLive") == -1) {
                    objForm.UserName.value += "@FPMLive";
                }
                objForm.product.value = 'Investor';
                formaction = fpLive;
                break;
        }

        objForm.action = formaction;

        if (errMsg != "") {
            alert(errMsg);
            return false;
        }

        return true;
    }

    function hideDummy() {
        objPassword = document.getElementById("password");
        objPasswordDummy = document.getElementById("passwordDummy");
        objPasswordDummy.style.display = 'none';

        objPassword.style.display = '';
        objPassword.focus();

    }

    function showDummy() {
        objPassword = document.getElementById("password");
        objPasswordDummy = document.getElementById("passwordDummy");

        if (objPassword.value == '') {
            objPassword.style.display = 'none';
            objPasswordDummy.style.display = '';
            objPasswordDummy.focus();
        }
    }

    function validate() {
        forms = document.flogin;
        if (forms.u.value == "") {
            alert("Please select your Username.");
            forms.u.focus();
            return false;
        }
        if (forms.p.value == "") {
            alert("Please select your Password.");
            forms.p.focus();
            return false;
        }
        if (!forms.u.value.toUpperCase().match("@FPMARKETS")) {
            forms.u.value += "@fpmarkets";
        }

        forms.submit();

    }

    function formreset() {
        document.flogin.reset();
    }
