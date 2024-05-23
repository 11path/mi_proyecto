(function() {
    const sliders = [...document.querySelectorAll('.news_body')];
    const buttonNext = document.querySelector('#next');
    const buttonBefore = document.querySelector('#before');
    let value;


    const changePosition = (add) => {
        const currentNews = document.querySelector('.news_body--show').dataset.id;
        value = Number(currentNews);
        value += add;

        sliders[Number(currentNews) - 1].classList.remove('news_body--show');
        if (value === sliders.length + 1 || value === 0) {
            value = value === 0 ? sliders.length : 1;
        }

        sliders[value - 1].classList.add('news_body--show');
    };

    if (buttonNext) {
        buttonNext.addEventListener('click', () => {
            changePosition(1);
        });
    }

    if (buttonBefore) {
        buttonBefore.addEventListener('click', () => {
            changePosition(-1);
        });
    }
})();
