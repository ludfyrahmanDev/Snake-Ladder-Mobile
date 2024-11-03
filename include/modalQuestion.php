 <!-- Modal Background Overlay -->
 <div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
    <!-- Modal Box -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4" id='modalTitle'>Pertanyaan</h2>
        <p class="mb-4 text-gray-600" id='modalDescription'>This is a sample modal using Tailwind CSS.</p>

        <!-- Modal Buttons -->
        <div class="flex justify-end space-x-2">
            <button onclick="toggleModal()" class="px-4 py-2 text-gray-700 bg-gray-200 rounded hover:bg-gray-300">
                Close
            </button>
            <button class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Confirm
            </button>
        </div>
    </div>
</div>
<script>
    // Function to toggle the modal visibility
    function openModalQuestion(title, description) {
        const modal = document.getElementById("modalOverlay");
        const modalTitle = document.getElementById("modalTitle");
        const modalDescription = document.getElementById("modalDescription");
        // 
        modalTitle.innerHTML = title;
        modalDescription.innerHTML = description;
        modal.classList.toggle("hidden");
        modal.classList.toggle("flex");
    }
</script>
