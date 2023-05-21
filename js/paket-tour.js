// Contoh data paket tour dalam format JSON
const packageData = [
  {
    id: 1,
    name: "Fast Boat to Gili Trawangan, Gili Air, Gili Meno",
    imgUrl: "img/high-angle-shot-motorboat-sailing-surface-sea.jpg",
    price: "400.000",
    description:
      "Gili is a small island located in Lombok where there are no motorized vehicles so the island is very quiet",
  },
  {
    id: 2,
    name: "Water Rafting in the Ayung River Ubud Bali",
    imgUrl: "img/package-3.jpg",
    price: "650.000",
    description:
      "What To Expect Pristine water, hidden waterfalls and tropical jungle surrounds make Bali's longest river a lovely location to tackle",
  },
  {
    id: 3,
    name: "Bali Holy Bath and Jungle Swing Private Day Trip",
    imgUrl: "img/holy-bath-bali.webp",
    price: "400.000",
    description:
      "What To Expect Forget all the stress of daily life and embark on a spiritual conquest for self-discovery in Bali!",
  },
  {
    id: 4,
    name: "Bali Full-Day Traditional Village Sightseeing Trip",
    imgUrl: "img/bali-traditional-village.jpg",
    price: "450.000",
    description:
      "Experience the traditional life of Bali's countryside on a full-day tour that takes you to several rural villages.",
  },
  {
    id: 5,
    name: "Mount Batur Sunrise Trekking and Hot Spring",
    imgUrl: "img/mount-batur.jpg",
    price: "750.000",
    description:
      "Hike to the top of Mount Batur (1717 meters) to watch the sunrise and enjoy breakfast before soaking in natural hot springs.",
  },
  {
    id: 6,
    name: "Bali Instagram Tour: The Most Scenic Spots",
    imgUrl: "img/bg-hero.jpg",
    price: "500.000",
    description:
      "Visit Bali's most scenic and Instagram-worthy locations including waterfalls, temples, and rice fields.",
  },
  {
    id: 7,
    name: "Private Ubud Tour with Tegalalang Rice Terrace and Monkey Forest",
    imgUrl: "img/ubud-rice-terrace.webp",
    price: "600.000",
    description:
      "Visit Bali's cultural heart in Ubud and see the iconic Tegalalang Rice Terrace and playful monkeys at the Monkey Forest.",
  },
  {
    id: 8,
    name: "Bali ATV Ride Adventure with Lunch",
    imgUrl: "img/atv-ride-bali.webp",
    price: "750.000",
    description:
      "Experience the thrill of riding an ATV through Bali's beautiful countryside and terraced rice fields.",
  },
  {
    id: 9,
    name: "Sunrise Trek to Mount Batur",
    imgUrl: "img/mount-batur.jpg",
    price: "950.000",
    description:
      "Climb Mount Batur and witness a beautiful sunrise over the surrounding volcanoes and Lake Batur.",
  },
  {
    id: 10,
    name: "Bali Hai Sunset Dinner Cruise",
    imgUrl: "img/sunset-dinner-cruise.jpg",
    price: "900.000",
    description:
      "Enjoy a romantic dinner cruise while watching the sunset over the Indian Ocean.",
  },
  {
    id: 11,
    name: "Uluwatu Temple and Kecak Dance Tour",
    imgUrl: "img/uluwatu-temple-kecak.webp",
    price: "550.000",
    description:
      "Visit the iconic Uluwatu Temple and watch a mesmerizing Kecak dance performance at sunset.",
  },
  {
    id: 12,
    name: "Tirta Gangga Water Palace and Lempuyang Temple Tour",
    imgUrl: "img/tirta-gangga.jpg",
    price: "800.000",
    description:
      "Discover the beauty of Bali's water palaces and temples on this full-day tour.",
  },
];

// Mendapatkan URL saat ini
const currentUrl = window.location.href;

// Menentukan apakah halaman index atau halaman packages
const isIndexPage = currentUrl.includes("index.php");
const isPackagesPage = currentUrl.includes("packages.php");

// Menentukan jumlah data yang ingin ditampilkan
let numDataToShow = 0;
if (isIndexPage) {
  numDataToShow = 10; // Menampilkan 10 data pada halaman index
} else if (isPackagesPage) {
  numDataToShow = packageData.length; // Menampilkan semua data pada halaman packages
}

// Looping data paket tour dan menampilkan ke tampilan HTML
const packagesList = document.getElementById("packages-list");
for (let i = 0; i < numDataToShow; i++) {
  const packageItem = packageData[i];
  const packageHtml = `
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="${
          i * 0.2
        }s">
            <div class="package-item">
                <div class="overflow-hidden">
                <img class="img-fluid" src="${packageItem.imgUrl}" alt="">
                </div>

                <div class="text-center p-4">
                    <h3 class="mb-0">Rp. ${packageItem.price}</h3>
                    <h3 class="mb-0">${packageItem.name}</h3>
                    <p>${packageItem.description}</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                        <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    `;
  packagesList.innerHTML += packageHtml;
}
