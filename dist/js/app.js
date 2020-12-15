// ********************************************* \\
// -------------------- MENU -------------------- \\
// *********************************************** \\
let toggle = document.querySelector(".nav-toggle");
let nav = document.querySelector(".navigation-menu");
let page = document.documentElement;

// La fonction permettant de basculer l'affichage en ajoutant/supprimant des classes
function doToggle() {
	toggle.classList.toggle("active");
	nav.classList.toggle("open");
	page.classList.toggle("noscroll");
}
toggle.addEventListener("click", doToggle);

if (nav) {
	let linkMenu = nav.querySelectorAll("a");
	for (let i = 0; i < linkMenu.length; i++) {
		linkMenu[i].addEventListener("click", doToggle);
	}
}

// ********************************************* \\
// --------------- COPYRIGHT YEAR --------------- \\
// *********************************************** \\
let today = new Date();
let year = today.getFullYear();

let elCopyright = document.querySelector(".copyright");
elCopyright.textContent = `${year} Tous droits réservés | Lydie BALLIOT`;

// ********************************************** \\
// --- ROTATION AND HOVER ON BLOC PRESENTATION --- \\
// ************************************************ \\
let elPresentation = document.querySelector(".profile-bloc");
if (elPresentation) {
	let rotation1 = document.querySelector(".bloc-rotation1");
	let rotation2 = document.querySelector(".bloc-rotation2");

	//La fonction permettant d'enlever la classe rotation
	function removeClassRotation() {
		rotation1.classList.remove("rotation1");
		rotation2.classList.remove("rotation2");
	}
	// La fonction permettant de faire tourner les blocs de la présentation en ajoutant / supprimant des classes
	function addRotation() {
		rotation1.classList.add("rotation1");
		rotation2.classList.add("rotation2");

		setTimeout(function () {
			removeClassRotation();
		}, 3100);
	}

	elPresentation.addEventListener("mouseover", addRotation);
	// --- Animation when page is loaded --- \\
	window.addEventListener("load", addRotation);
}

// ********************************************* \\
// ---------------- HOVER PROJET ---------------- \\
// *********************************************** \\
let elProject = document.querySelectorAll("article");

for (let i = 0; i < elProject.length; i++) {
	elProject[i].addEventListener("mouseover", () => {
		let imageProject = elProject[i].querySelector("img");
		let titleProject = elProject[i].querySelector("h4");
		let textProject = elProject[i].querySelector("p");

		imageProject.classList.toggle("filter");
		titleProject.classList.toggle("hidden");
		titleProject.classList.toggle("visible");
		textProject.classList.toggle("hidden");
		textProject.classList.toggle("visible");
	});
}
