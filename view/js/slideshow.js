var imgArray = [
  './view/images/slide1.png',
  './view/images/bn1.png',
  'view/images/bn3.png',
];
var curIndex = 0;
var imgDuration = 2000;

function slideShow() {
  document.getElementById('image1').src = imgArray[curIndex];
  curIndex++;
  if (curIndex == imgArray.length) { curIndex = 0; }
  setTimeout("slideShow()", imgDuration);
}
slideShow();

const showOnPx = 100;
const backToTopButton = document.querySelector(".back-to-top");
const pageProgressBar = document.querySelector(".progress-bar");

const scrollContainer = () => {
  return document.documentElement || document.body;
};

const goToTop = () => {
  document.body.scrollIntoView({
    behavior: "smooth"
  });
};

document.addEventListener("scroll", () => {
  console.log("Scroll Height: ", scrollContainer().scrollHeight);
  console.log("Client Height: ", scrollContainer().clientHeight);

  const scrolledPercentage =
    (scrollContainer().scrollTop /
      (scrollContainer().scrollHeight - scrollContainer().clientHeight)) *
    100;

  pageProgressBar.style.width = `${scrolledPercentage}%`;

  if (scrollContainer().scrollTop > showOnPx) {
    backToTopButton.classList.remove("hidden");
  } else {
    backToTopButton.classList.add("hidden");
  }
});

backToTopButton.addEventListener("click", goToTop);


