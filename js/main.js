

let getUsers= () => {
fetch('/simplecms/partials/finduser.php')
.then (data=>data.text())
.then (text => console.log(text));
}