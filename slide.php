<style>
	.swiper-slide {
		background-size: cover;
		background-position: center;
		background-color: rgb(255, 255, 255);
		/* Placeholder color */
	}

	.lazyload {
		background-image: none;
		/* Sin fondo inicialmente */
	}

	.lazyloaded {
		transition: background-image 0.3s ease-in-out;
		/* Transición suave */
	}

	.swiper-wrapper {
		width: 80%;
		height: 100%;
	}

	.swiper-slide {
		width: 90%;
		height: 100% !important;
		/* Opcional: Ajusta a la altura de la ventana */
		background-size: 90% 120% !important;
		background-position: center;
		background-repeat: no-repeat;
		overflow-y: none;
	}

	.carousel-container {
		position: relative;
		width: 80%;
		/* Adjust as needed */
		height: 700px;
		/* Adjust as needed */
		overflow: hidden;
		display: flex;
		/* Habilita Flexbox */
		justify-content: center;
		/* Centrar horizontalmente */
		align-items: center;
		/* Centrar verticalmente */
		left: 10% !important;
	}

	.carousel-slide {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		/* Initially hidden */
		transition: opacity 0.5s ease-in-out;
		/* Smooth transitions */
		background-size: cover;
		/* Cover the container */
		background-position: center;
		/* Center the image */
		.display: flex;
		/* Habilita Flexbox en los slides también */
		justify-content: center;
		align-items: center;
	}

	.carousel-slide.active {
		opacity: 1;
		/* Show active slide */
	}

	.carousel-navigation {
		position: absolute;
		bottom: 20px;
		left: 50%;
		transform: translateX(-50%);
		display: flex;
	}

	.carousel-navigation button {
		background-color: rgba(0, 0, 0, 0.5);
		/* Semi-transparent background */
		color: white;
		border: none;
		padding: 10px 15px;
		margin: 0 5px;
		cursor: pointer;
		border-radius: 5px;
	}

	.carousel-navigation button.active {
		background-color: #2953A0;
		/* Highlight active button */
	}
</style>



<div class="carousel-container">
	<div class="carousel-slide active" style="background-image: url('/images/banner1.png');"></div>
	<div class="carousel-slide" style="background-image: url('/images/banner2.png');"></div>
	<div class="carousel-slide" style="background-image: url('/images/banner3.png');"></div>
	<div class="carousel-slide" style="background-image: url('/images/banner4.png');"></div>
	<div class="carousel-slide" style="background-image: url('/images/banner5.png');"></div>
	<div class="carousel-slide" style="background-image: url('/images/banner6.png');"></div>
	<div class="carousel-slide" style="background-image: url('/images/banner7.png');"></div>


	<div class="carousel-navigation">
		<button class="active" data-slide="0"></button>
		<button data-slide="1"></button>
		<button data-slide="2"></button>
		<button data-slide="3"></button> 
		<button data-slide="4"></button> 
		<button data-slide="5"></button> 
		<button data-slide="6"></button> 

	</div>
</div>


<script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {
		const lazySlides = document.querySelectorAll(".lazyload");

		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						const slide = entry.target;
						const bgImage = slide.getAttribute("data-bg");
						if (bgImage) {
							slide.style.backgroundImage = `url(${bgImage})`;
							slide.classList.add("lazyloaded");
							observer.unobserve(slide); // Dejar de observar después de cargar
						}
					}
				});
			},
			{
				rootMargin: "0px 0px 50px 0px", // Opcional: Margen para cargar antes de que sea visible
				threshold: 0.1, // Visible al menos 10% para iniciar la carga
			}
		);

		lazySlides.forEach((slide) => observer.observe(slide));
	}); 
</script>
<script>
	const slides = document.querySelectorAll('.carousel-slide');
	const buttons = document.querySelectorAll('.carousel-navigation button');
	let currentSlide = 0;
	let intervalId;

	function showSlide(n) {
		slides[currentSlide].classList.remove('active');
		buttons[currentSlide].classList.remove('active');
		currentSlide = (n + slides.length) % slides.length; // Handle wrapping
		slides[currentSlide].classList.add('active');
		buttons[currentSlide].classList.add('active');
	}

	function startCarousel() {
		intervalId = setInterval(() => {
			showSlide(currentSlide + 1);
		}, 3000); // Change slide every 3 seconds (adjust as needed)
	}

	function stopCarousel() {
		clearInterval(intervalId);
	}

	buttons.forEach(button => {
		button.addEventListener('click', () => {
			stopCarousel(); // Stop automatic transitions on manual click
			showSlide(parseInt(button.dataset.slide));
			startCarousel(); // Restart automatic transitions
		});
	});

	startCarousel(); // Start the carousel initially

	// Optional: Pause on hover
	const carouselContainer = document.querySelector('.carousel-container');
	carouselContainer.addEventListener('mouseenter', stopCarousel);
	carouselContainer.addEventListener('mouseleave', startCarousel);

</script>