const counters = document.querySelectorAll('.counter');

counters.forEach((counter) => {
  counter.innerHTML = '0';

  const updateCounter = () => {
    const target = +counter.getAttribute('data-target');
    const c = +counter.innerHTML;
    const increment = target / 1500;

    if (c < target) {
      counter.innerHTML = `${Math.ceil(c + increment)}`;
      setTimeout(updateCounter, 1);
    } else {
      counter.innerHTML = target;
    }
  };

  updateCounter();
});

//AOS

AOS.init();
