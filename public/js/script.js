tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                Noto: ["Noto Serif ", "serif"],
                Lato: ["Lato", "sans-serif"],
                PT: ["PT Serif", "serif"],
            },
        }
    }
}

let searchbar = document.querySelector(".searchbar")
let closeBtn = document.querySelector(".closeBtn")
let searchBtn = document.querySelector(".searchBtn")

searchBtn.addEventListener('click', function () {
    searchbar.classList.toggle("hidden");
})

closeBtn.addEventListener('click', function () {
    searchbar.classList.toggle("hidden");
})