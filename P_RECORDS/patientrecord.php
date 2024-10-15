<!-- Patient Records Section -->
<section id="patient-records" class="section">
    <h2>Patient Records</h2>

    <!-- Search and Add Container -->
    <div class="search-and-add-container">
        <!-- Search bar container -->
        <div class="search-container">
            <input type="text" id="searchPatientRecords" onkeyup="searchPatientRecords(this.value);" placeholder="Search for patient records...">
        </div>

        <!-- Button container -->
        <div class="add-button-container">
            <button onclick="openAddPatientRecordModal()">Create Record</button>
        </div>
    </div>

    <!-- Add Patient Record Modal -->
    <div id="addPatientRecordModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeAddPatientRecordModal()">&times;</span>
            <h3>Create Patient Record</h3>
            <form id="addPatientRecordForm" onsubmit="submitAddPatientRecordForm(event)">
                <label for="patientName">Patient Name:</label>
                <select id="patientName" name="patientName" required>
                    <!-- Options will be populated dynamically -->
                </select>

                <label for="recordType">Record Type:</label>
                <select id="recordType" name="recordType" required>
                    <option value="Consultation">Consultation</option>
                    <option value="Lab Test">Lab Test</option>
                    <option value="Diagnosis">Diagnosis</option>
                    <!-- Add more options as needed -->
                </select>

                <label for="recordDate">Date of Record:</label>
                <input type="date" id="recordDate" name="recordDate" required>

                <label for="healthWorker">Assigned Healthworker:</label>
                <input type="text" id="healthWorker" name="healthWorker" readonly>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <!-- Edit Patient Record Modal -->
    <div id="editPatientRecordModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditPatientRecordModal()">&times;</span>
            <h3>Edit Patient Record</h3>
            <form id="editPatientRecordForm" onsubmit="submitEditPatientRecordForm(event)">
                
                <!-- Display patient name as non-editable -->
                <label for="editPatientName">Patient Name:</label>
                <input type="text" id="editPatientName" name="editPatientName" readonly>

                <label for="editRecordType">Record Type:</label>
                <select id="editRecordType" name="editRecordType" required>
                    <option value="Consultation">Consultation</option>
                    <option value="Lab Test">Lab Test</option>
                    <option value="Diagnosis">Diagnosis</option>
                </select>

                <label for="editRecordDate">Date of Record:</label>
                <input type="date" id="editRecordDate" name="editRecordDate" required>

                <label for="editHealthWorker">Assigned Healthworker:</label>
                <input type="text" id="editHealthWorker" name="editHealthWorker" readonly>

                <!-- Hidden field for record ID -->
                <input type="hidden" id="editRecordId" name="editRecordId">

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <!-- Patient Records Table -->
    <div class="table-container">
        <table id="patientRecordsTable">
            <thead>
                <tr>
                    <th>Patient Name<div class="resizer"></div></th>
                    <th>Record Type<div class="resizer"></div></th>
                    <th>Date of Record<div class="resizer"></div></th>
                    <th>Assigned Healthworker<div class="resizer"></div></th>
                    <th>Actions<div class="resizer"></div></th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</section>