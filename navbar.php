<!--------------------------------NAVBAR------------------------------------->
<nav class="navbar navbar-expand-lg navbar-fixed-top fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo-white.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gaming.php">GAMING</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="ConceptArt.php">CONCEPT ART</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="ourwork.php">OUR WORK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visualeffect.php">VISUAL EFFECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="careers.php">CAREERS</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="contact.php" role="button" data-bs-toggle="" aria-expanded="false">CONTACT US</a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item bg-dark b" href="internship.php">INTERNSHIP</a></li>
                        <li><a class="dropdown-item bg-dark b" href="payment.php">PAYMENT</a></li>
                        <li><a class="dropdown-item bg-dark b"   href="Faq.php">FAQ</a></li>
                    </ul>
                </li> 
            </ul>
        </div>
    </div>
</nav>


<script>
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

	document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

		everyitem.addEventListener('mouseover', function(e){

			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.add('show');
				nextEl.classList.add('show');
			}

		});
		everyitem.addEventListener('mouseleave', function(e){
			let el_link = this.querySelector('a[data-bs-toggle]');

			if(el_link != null){
				let nextEl = el_link.nextElementSibling;
				el_link.classList.remove('show');
				nextEl.classList.remove('show');
			}


		})
	});

}
// end if innerWidth
}); 
// DOMContentLoaded  end
</script>



<style>
    @media all and (max-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{   }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}
</style>