document.addEventListener("DOMContentLoaded", (event) => {
	const swiperSlider = new Swiper(".swiperSlider", {
		centeredSlides: true,
		pagination: {
			clickable: true,
			el: ".swiper-pagination",
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
	});

	function updateClock() {
		const clockElement = document.getElementById("clock");
		const now = new Date();

		const days = [
			"Chủ Nhật",
			"Thứ Hai",
			"Thứ Ba",
			"Thứ Tư",
			"Thứ Năm",
			"Thứ Sáu",
			"Thứ Bảy",
		];

		const dayName = days[now.getDay()];
		const date = now.getDate().toString().padStart(2, "0");
		const month = (now.getMonth() + 1).toString().padStart(2, "0");
		const year = now.getFullYear();
		const hours = now.getHours().toString().padStart(2, "0");
		const minutes = now.getMinutes().toString().padStart(2, "0");
		const seconds = now.getSeconds().toString().padStart(2, "0");

		clockElement.textContent = `${dayName}, ${date}/${month}/${year}, ${hours}:${minutes}:${seconds}`;
	}

	updateClock();
	setInterval(updateClock, 1000);
});
