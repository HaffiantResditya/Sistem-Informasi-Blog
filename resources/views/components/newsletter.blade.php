<section class="py-20 px-6 bg-black text-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Jangan Lewatkan Update Terbaru</h2>
        <p class="text-xl text-gray-400 mb-10">
            Dapatkan artikel, tips, dan insight menarik langsung ke inbox Anda setiap minggu.
        </p>

        <form action="{{ route('newsletter.subscribe') }}" method="POST"
            class="flex flex-col md:flex-row gap-4 max-w-2xl mx-auto">
            @csrf
            <input type="email" name="email" placeholder="Masukkan email Anda" required
                class="flex-1 px-6 py-4 bg-white text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-white" />
            <button type="submit"
                class="bg-white text-black px-8 py-4 font-medium rounded-lg hover:bg-gray-100 transition whitespace-nowrap">Subscribe
                Sekarang</button>
        </form>
        <p class="text-sm text-gray-500 mt-6">Gratis. Berhenti berlangganan kapan saja. Tanpa spam.</p>
    </div>
</section>
