<style>
        /* Animation for fading in and out */
    @keyframes fadeIn {
        0% { opacity: 0; transform: scale(0.95); }
        100% { opacity: 1; transform: scale(1); }
    }

    @keyframes fadeOut {
        0% { opacity: 1; transform: scale(1); }
        100% { opacity: 0; transform: scale(0.95); }
    }

    /* Pixelated Border Style */
    .pixel-border {
        border: 4px solid;
        border-image: linear-gradient(to right, #ff0066, #ffcc00) 1;
    }
</style>
<div id="notif" class="hidden fixed top-10 left-1/2 transform -translate-x-1/2  text-white py-4 px-8 rounded-lg shadow-xl pixel-border transition-all duration-500 ease-in-out">
    <div class="flex items-center space-x-4">
        <div id='notif-image'>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <span class="text-lg font-bold" id='notif-title'>Success</span>
        <span class="text-sm" id='notif-message'>Operation completed successfully!</span>
    </div>
</div>

<script>
    function showToast(message, type = 'success'){
        const notif = document.getElementById('notif');
        const notifTitle = document.getElementById('notif-title');
        const notifMessage = document.getElementById('notif-message');
        const notifImage = document.getElementById('notif-image');
        notif.classList.remove('hidden');
        if(type === 'success'){
            notif.classList.add('bg-green-500');
            notifImage.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>`;
        } else if(type === 'error'){
            notif.classList.add('bg-red-500');
            notifImage.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>`;
        } else if(type === 'warning'){
            notif.classList.add('bg-yellow-500');
            notifImage.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>`;
        }
        notifTitle.innerText = type.charAt(0).toUpperCase() + type.slice(1);
        notifMessage.innerText = message;
        setTimeout(() => {
            notif.classList.add('hidden');
        }, 3000); // Auto hide toast after 3 seconds
    }
</script>