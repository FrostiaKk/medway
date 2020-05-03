
    document.body.onload = () => {
        console.log('loaded');
        let openEditDetailsModal = document.getElementById("open-edit-details-modal");
        let closeEditDetailsModal = document.getElementById("close-edit-details-modal");
        let editDetailsModal = document.getElementById("edit-details-modal");
        
        editDetailsModal.style.display = "none";

        openEditDetailsModal.onclick = () => {
            editDetailsModal.style.display = "block";
        }

        closeEditDetailsModal.onclick = () => {
            editDetailsModal.style.display = "none";
        }

        
    }
