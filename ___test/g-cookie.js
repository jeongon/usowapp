/* ---------------------------------

GCookie
2015-10-19
gegomu

Gestor de cookies
------------------------------------ */

/*
 * Crea una cookie
 * cname: nombre
 * cvalue: valor
 * validityDays: dias de validez
 */
function GCookieSet(cname, cvalue, validityDays) {
    var d = new Date();
    d.setTime(d.getTime() + (validityDays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();

    document.cookie = cname + "=" + cvalue + "; " + expires + " ; SameSite=strict";

}

/*
 * Obtiene el valor de una cookie
 * @return: string con el valor de la cookie, NULL si no existe
 */
function GCookieGet(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return null;
}


/*
 * Borra una cookie
 */
function GCookieDelete(cname){
	document.cookie = cname+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC ; SameSite=strict";
}


/*
 * Verifica si existe una cookie
 * @return: TRUE si existe
 */
function GCookieCheck(cname) {
    var val = GCookieGet(cname);
    if (val != null) {
        return true;
    } else {
        return false;
    }
}
