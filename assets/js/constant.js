const GAME_BOARD_BG_01 = "assets/img/bg.jpg";
const SNAKES_AND_LADDERS_01 = {
    1: 38,
    4: 14,
    8: 30,
    21: 42,
    28: 76,
    32: 10,
    36: 6,
    48: 26,
    50: 67,
    62: 18,
    71: 92,
    80: 99,
    88: 24,
    95: 56,
    97: 78
};


const GAME_BOARD_BG_02 = "assets/img/bg2.jpg";
const SNAKES_AND_LADDERS_02 = {
    5: 58,
    14: 49,
    38: 20,
    51: 10,
    53: 72,
    64: 83,
    76: 54,
    91: 73,
    97: 61
};
const questions = {
    "amateur": [
        {
            "question": "Apa yang harus kita lakukan sebelum makan?",
            "answers": [
                "a. Minum obat",
                "b. Mencuci tangan dengan sabun",
                "c. Menonton televisi",
                "d. Bermain"
            ],
            "correct": "b"
        },
        {
            "question": "3.Mengapa kita harus sarapan setiap pagi?",
            "answers": [
                "a. Supaya tidur lebih lama",
                "b. Supaya punya energi untuk belajar dan bermain",
                "c. Supaya bisa menonton TV",
                "d. Supaya tidak minum air"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang harus kita lakukan setelah makan?",
            "answers": [
                "a. Bermain di luar",
                "b. Tidur",
                "c. Mencuci tangan dan sikat gigi",
                "d. Menonton TV"
            ],
            "correct": "c"
        },
        {
            "question": "Mengapa kita harus minum susu setiap hari?",
            "answers": [
                "a. Supaya tidur lebih lama",
                "b. Supaya mendapatkan kalsium untuk tulang yang kuat",
                "c. Supaya kita tidak haus",
                "d. Supaya bisa menonton TV"
            ],
            "correct": "b"
        },
        {
            "question": "Mengapa kita harus makan buah dan sayur setiap hari?",
            "answers": [
                "a. Supaya lebih cepat lapar",
                "b. Supaya mendapatkan vitamin dan mineral yang baik untuk tubuh",
                "c. Supaya tidak haus",
                "d. Supaya bisa tidur lebih lama"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang sebaiknya kita minum untuk menjaga tubuh tetap sehat?",
            "answers": [
                "a. Es teh",
                "b. Jus buah segar",
                "c. Kopi",
                "d. Minuman boba"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang terjadi jika kita terlalu banyak makan makanan manis?",
            "answers": [
                "a. Gigi akan tetap sehat",
                "b. Berat badan akan berkurang",
                "c. Gigi bisa berlubang dan berat badan bisa bertambah",
                "d. Tubuh menjadi lebih kuat"
            ],
            "correct": "c"
        },
        {
            "question": "Apa yang terjadi jika kita tidak makan cukup sayuran?",
            "answers": [
                "a. Kita akan merasa lebih kuat",
                "b. Tubuh kita tidak akan mendapatkan cukup vitamin",
                "c. Kita akan lebih sehat",
                "d. Kita akan lebih pintar"
            ],
            "correct": "b"
        },
        
    ],
    "regular":[
//         1.Mengapa kita harus makan?
// a.Untuk menghasilkan energi
// b.Menjaga kesehatan kulit
// c.Agar tidak mengantuk
// d.Agar tidur menjadi nyenyak
// Jawaban: a
        {
            "question": "Mengapa kita harus makan?",
            "answers": [
                "a. Untuk menghasilkan energi",
                "b. Menjaga kesehatan kulit",
                "c. Agar tidak mengantuk",
                "d. Agar tidur menjadi nyenyak"
            ],
            "correct": "a"
        },
//         3.Tahu dan tempe termasuk kedalam kelompok zat gizi…
// a.Karbohidrat
// b.Protein nabati
// c.Protein hewani
// d.Lemak
// Jawaban: b
// 4.Contoh makanan yang memiliki penyerapan zat besi tinggi adalah…
// a.Telur, ayam, ikan, dan daging
// b.Tahu dan tempe
// c.Bayam dan kangkung
// d.Buah naga dan tomat
// Jawaban: a
// 5.Jika kita makan terlalu banyak dari kebutuhan kita, maka…
// a.Gemuk/ status gizi berlebih
// b.Sulit berpikir dan belajar
// c.Malas bergerak dan beraktivitas
// d.Mudah marah dan emosi
// Jawaban: a
// 6.Vitamin apa yang paling banyak pada buah jeruk dan jambu biji?
// a.Vitamin A
// b.Vitamin C
// c.Vitamin D
// d.Vitamin E
// Jawaban: b
// 7.Kita harus minum air putih sebanyak…
// a.10 gelas per hari
// b.3 gelas per hari
// c.8 gelas per hari
// d.2 gelas per hari
// Jawaban: c
        {
            "question": "Tahu dan tempe termasuk kedalam kelompok zat gizi…",
            "answers": [
                "a. Karbohidrat",
                "b. Protein nabati",
                "c. Protein hewani",
                "d. Lemak"
            ],
            "correct": "b"
        },
        {
            "question": "Contoh makanan yang memiliki penyerapan zat besi tinggi adalah…",
            "answers": [
                "a. Telur, ayam, ikan, dan daging",
                "b. Tahu dan tempe",
                "c. Bayam dan kangkung",
                "d. Buah naga dan tomat"
            ],
            "correct": "a"
        },
        {
            "question": "Jika kita makan terlalu banyak dari kebutuhan kita, maka…",
            "answers": [
                "a. Gemuk/ status gizi berlebih",
                "b. Sulit berpikir dan belajar",
                "c. Malas bergerak dan beraktivitas",
                "d. Mudah marah dan emosi"
            ],
            "correct": "a"
        },
        {
            "question": "Vitamin apa yang paling banyak pada buah jeruk dan jambu biji?",
            "answers": [
                "a. Vitamin A",
                "b. Vitamin C",
                "c. Vitamin D",
                "d. Vitamin E"
            ],
            "correct": "b"
        },
        {
            "question": "Kita harus minum air putih sebanyak…",
            "answers": [
                "a. 10 gelas per hari",
                "b. 3 gelas per hari",
                "c. 8 gelas per hari",
                "d. 2 gelas per hari"
            ],
            "correct": "c"
        },
        {
            "question": "Makanan yang mengandung karbohidrat adalah…",
            "answers": [
                "a. Daging dan ikan",
                "b. Sayuran dan buah",
                "c. Nasi, roti, dan pasta",
                "d. Telur dan susu"
            ],
            "correct": "c"
        },
        {
            "question": "Contoh makanan sebagai sumber lemak nabati adalah?",
            "answers": [
                "a. Minyak kelapa",
                "b. Kulit ayam",
                "c. Kuning telur",
                "d. Keju"
            ],
            "correct": "a"
        },
        {
            "question": "Manfaat olah raga adalah, kecuali…",
            "answers": [
                "a. Agar tubuh tetap sehat dan bugar",
                "b. Agar tubuh kuat melawan penyakit",
                "c. Menjaga berat badan tetap ideal",
                "d. Menambah berat badan"
            ],
            "correct": "d"
        },
        {
            "question": "Kebiasaan makan yang tidak teratur dapat menyebabkan penyakit…",
            "answers": [
                "a. Maag",
                "b. Diare",
                "c. Flu",
                "d. Demam"
            ],
            "correct": "a"
        },
        {
            "question": "Kebiasaan makan yang tidak teratur dapat menyebabkan penyakit…",
            "answers": [
                "a. Maag",
                "b. Diare",
                "c. Flu",
                "d. Demam"
            ],
            "correct": "a"
        },
        {
            "question": "Makanan yang mengandung protein hewani adalah…",
            "answers": [
                "a. Tahu dan tempe",
                "b. Daging, ikan, dan telur",
                "c. Sayuran dan buah",
                "d. Nasi, roti, dan pasta"
            ],
            "correct": "b"
        },
        {
            "question": "Makanan yang mengandung vitamin D adalah…",
            "answers": [
                "a. Daging dan ikan",
                "b. Sayuran dan buah",
                "c. Nasi, roti, dan pasta",
                "d. Telur dan susu"
            ],
            "correct": "a"
        },
    ],
    "professional":[
//         1.Apa itu gizi seimbang? 
// a. Makan banyak permen
// b. Makan makanan yang mengandung semua nutrisi yang dibutuhkan tubuh
// c. Hanya makan buah
// d. Minum soda setiap hari
// Jawaban: b
// 2.Apa manfaat dari mengonsumsi sayur dan buah setiap hari? 
// a. Membuat kita merasa lelah
// b. Menyebabkan sakit perut
// c. Memberikan vitamin dan serat
// d. Membuat kita mengantuk
// Jawaban: c
// 3.Apa fungsi utama dari protein dalam tubuh kita? 
// a. Memberikan energi
// b. Membangun dan memperbaiki jaringan tubuh
// c. Menyebabkan kantuk
// d. Menambah rasa makanan
// Jawaban: b
        {
            "question": "Apa itu gizi seimbang?",
            "answers": [
                "a. Makan banyak permen",
                "b. Makan makanan yang mengandung semua nutrisi yang dibutuhkan tubuh",
                "c. Hanya makan buah",
                "d. Minum soda setiap hari"
            ],
            "correct": "b"
        },
        {
            "question": "Apa manfaat dari mengonsumsi sayur dan buah setiap hari?",
            "answers": [
                "a. Membuat kita merasa lelah",
                "b. Menyebabkan sakit perut",
                "c. Memberikan vitamin dan serat",
                "d. Membuat kita mengantuk"
            ],
            "correct": "c"
        },
        {
            "question": "Apa fungsi utama dari protein dalam tubuh kita?",
            "answers": [
                "a. Memberikan energi",
                "b. Membangun dan memperbaiki jaringan tubuh",
                "c. Menyebabkan kantuk",
                "d. Menambah rasa makanan"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang terjadi jika kita terlalu banyak makan makanan manis?",
            "answers": [
                "a. Gigi akan tetap sehat",
                "b. Berat badan akan berkurang",
                "c. Gigi bisa berlubang dan berat badan bisa bertambah",
                "d. Tubuh menjadi lebih kuat"
            ],
            "correct": "c"
        },
        {
            "question": "Apa yang terjadi jika kita tidak makan cukup sayuran?",
            "answers": [
                "a. Kita akan merasa lebih kuat",
                "b. Tubuh kita tidak akan mendapatkan cukup vitamin",
                "c. Kita akan lebih sehat",
                "d. Kita akan lebih pintar"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang sebaiknya kita minum untuk menjaga tubuh tetap sehat?",
            "answers": [
                "a. Es teh",
                "b. Jus buah segar",
                "c. Kopi",
                "d. Minuman boba"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang terjadi jika kita terlalu banyak makan makanan manis?",
            "answers": [
                "a. Gigi akan tetap sehat",
                "b. Berat badan akan berkurang",
                "c. Gigi bisa berlubang dan berat badan bisa bertambah",
                "d. Tubuh menjadi lebih kuat"
            ],
            "correct": "c"
        },
//         7.Manakah dari berikut ini yang merupakan prinsip dasar dari gizi seimbang? 
// a. Konsumsi makanan berlemak tinggi
// b. Menghindari semua jenis lemak
// c. Konsumsi makanan beragam dan seimbang
// d. Hanya makan sayur dan buah-buahan
// Jawaban: c
// 8.Apa yang harus kita lakukan jika ingin hidup sehat? 
// a. Makan makanan cepat saji setiap hari
// b. Makan makanan seimbang, berolahraga, dan minum air putih yang cukup 
// c. Menonton TV sepanjang hari
// d. Menghindari sayuran
// Jawaban: b
// 9.Apa yang harus dilakukan agar tubuh tetap sehat? 
// a. Makan permen setiap hari
// b. Tidur sepanjang hari
// c. Makan makanan bergizi dan berolahraga
// d. Minum soda setiap hari
// Jawaban: c
        {
            "question": "Manakah dari berikut ini yang merupakan prinsip dasar dari gizi seimbang?",
            "answers": [
                "a. Konsumsi makanan berlemak tinggi",
                "b. Menghindari semua jenis lemak",
                "c. Konsumsi makanan beragam dan seimbang",
                "d. Hanya makan sayur dan buah-buahan"
            ],
            "correct": "c"
        },
        {
            "question": "Apa yang harus kita lakukan jika ingin hidup sehat?",
            "answers": [
                "a. Makan makanan cepat saji setiap hari",
                "b. Makan makanan seimbang, berolahraga, dan minum air putih yang cukup",
                "c. Menonton TV sepanjang hari",
                "d. Menghindari sayuran"
            ],
            "correct": "b"
        },
        {
            "question": "Apa yang harus dilakukan agar tubuh tetap sehat?",
            "answers": [
                "a. Makan permen setiap hari",
                "b. Tidur sepanjang hari",
                "c. Makan makanan bergizi dan berolahraga",
                "d. Minum soda setiap hari"
            ],
            "correct": "c"
        },
        {
            "question": "Nutrisi apa yang diperlukan tubuh untuk membangun dan memperbaiki jaringan?",
            "answers": [
                "a. Karbohidrat",
                "b. Lemak",
                "c. Vitamin",
                "d. Protein"
            ],
            "correct": "d"
        },
        {
            "question": "Sumber utama energi dalam tubuh adalah",
            "answers": [
                "a. Protein",
                "b. Lemak",
                "c. Karbohidrat",
                "d. Vitamin"
            ],
            "correct": "c"
        }
    ]
}