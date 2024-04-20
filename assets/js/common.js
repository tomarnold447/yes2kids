// common.js
function showOptions() {
    var role = document.getElementById("role").value;
    var additionalOptions = document.getElementById("additional-options");

    // Reset additional options
    additionalOptions.innerHTML = "";
    additionalOptions.style.display = "none";

    // Show additional options based on the selected role
    switch(role) {
        case "other_caregiver":
            additionalOptions.style.display = "block";
            var caregiverOptionsDiv = document.createElement("div");
            caregiverOptionsDiv.classList.add("col-lg-6", "col-md-6", "caregiver-options", "mb-30");
            caregiverOptionsDiv.innerHTML = `
                <div class="form-box mb-30">
                    <select name="caregiver_type" id="caregiver_type" class="mb-30">
                        <option value="">Select Caregiver Type</option>
                        <option value="relative">Relative</option>
                        <option value="friend">Friend</option>
                        <option value="community_health_promoter">Community Health Promoter</option>
                    </select>
                </div>
            `;
            additionalOptions.appendChild(caregiverOptionsDiv);
            break;
        case "donor":
            additionalOptions.style.display = "block";
            var donorOptionsDiv = document.createElement("div");
            donorOptionsDiv.classList.add("col-lg-6", "col-md-6", "donor-options", "mb-30");
            donorOptionsDiv.innerHTML = `
                <div class="form-box mb-30">
                    <select name="donor_type" id="donor_type" class="mb-30">
                        <option value="">Select Donor Type</option>
                        <option value="individual">Individual</option>
                        <option value="corporate">Corporate</option>
                    </select>
                </div>
            `;
            additionalOptions.appendChild(donorOptionsDiv);
            break;
        case "volunteer":
            additionalOptions.style.display = "block";
            var volunteerOptionsDiv = document.createElement("div");
            volunteerOptionsDiv.classList.add("col-lg-6", "col-md-6", "volunteer-options", "mb-30");
            volunteerOptionsDiv.innerHTML = `
                <div class="form-box mb-30">
                    <select name="volunteer_type" id="volunteer_type" class="mb-30">
                        <option value="">Select Volunteer Type</option>
                        <option value="administrative_support">Administrative Support</option>
                        <option value="ict_support">ICT Support</option>
                        <option value="medical_services">Medical Services</option>
                        <option value="community_work">Community Work</option>
                        <option value="family_support">Family Support</option>
                    </select>
                </div>
            `;
            additionalOptions.appendChild(volunteerOptionsDiv);
            break;
        default:
            break;
    }

    // Validation function
function validateDonation() {
    var selectedRole = document.getElementById("role").value;
    var additionalOptions = document.getElementById("additional-options");
    
    // Check if a role is selected and additional options are displayed based on the selected role
    if (selectedRole === "" || additionalOptions.style.display !== "block") {
        alert("Please select a role and fill in the required options.");
        return false; // Prevent form submission
    }
    return true; // Proceed with form submission
}

}
