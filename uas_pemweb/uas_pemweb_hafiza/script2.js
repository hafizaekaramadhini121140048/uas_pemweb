// Fungsi untuk menetapkan cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fungsi untuk mendapatkan nilai cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Fungsi untuk menghapus cookie
function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

// Contoh penggunaan fungsi-fungsi cookie
setCookie('user_id', '123', 7); // Menetapkan cookie dengan nama 'user_id' dan nilai '123' yang berlaku selama 7 hari
var userId = getCookie('user_id'); // Mendapatkan nilai cookie 'user_id'
eraseCookie('user_id'); // Menghapus cookie 'user_id'

// Menggunakan browser storage (local storage)
localStorage.setItem('user_id', '123'); // Menetapkan nilai '123' ke dalam local storage
var storedUserId = localStorage.getItem('user_id'); // Mendapatkan nilai dari local storage
localStorage.removeItem('user_id'); // Menghapus nilai dari local storage
