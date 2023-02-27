import "slick-carousel";

const parent = $(`.faq-slider`);
const slider = parent.find(`.slider-wrapper`);

slider.slick({
    slidesToShow: 2,
    arrows: false,
});
