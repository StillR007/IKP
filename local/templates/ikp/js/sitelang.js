function replaceQueryParam(param, newval, search) {
    var regex = new RegExp("([?;&])" + param + "[^&;]*[;&]?");
    var query = search.replace(regex, "$1").replace(/&$/, '');
    return (query.length > 2 ? query + "&" : "?") + (newval ? param + "=" + newval
    : '');
}

function change_lang(code) {
    window.location = replaceQueryParam(
        'lang',
        code, 
        window.location.search
    );
}