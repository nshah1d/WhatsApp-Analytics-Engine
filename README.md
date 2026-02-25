# WhatsApp Analytics Engine

![Status](https://img.shields.io/badge/Status-Production-success) ![Privacy](https://img.shields.io/badge/Privacy-Local%20Only-green) ![Architecture](https://img.shields.io/badge/Architecture-Zero%20Dependency-blue) ![License](https://img.shields.io/badge/License-MIT-orange) [![Live Demo](https://img.shields.io/badge/Demo-Live%20Preview-31B33B)](https://www.nauman.cc/demo/whatsapp/)

A privacy-first ETL and data processing engine for massive, unstructured WhatsApp communication archives.

This application transforms raw `_chat.txt` logs and media assets into a structured, queryable JSON dataset with a fully interactive inspection interface. Engineered with a strict zero-dependency philosophy, it operates locally without external frameworks, databases, or cloud processing, ensuring absolute data sovereignty and accurate schema normalisation.

---

## Key Capabilities

* **Regex-Driven Schema Normalisation:** Proprietary parsing logic cleans and structures chaotic chat logs. It automatically handles multi-line messages, system events, and multi-lingual timestamp variations, converting raw text into strict JSON objects.
* **Index-Based Traversal:** The parsing engine indexes data arrays linearly, enabling instantaneous querying and temporal navigation of multi-year conversational histories without server-side processing overhead.
* **Memory-Optimised Chunking:** Utilises custom DOM management and lazy-loading algorithms to render massive datasets (50,000+ records) and heavy media libraries with minimal memory overhead.
* **Media Metadata Aggregation:** A dedicated utility processor isolates, categorises, and previews attachments (images, video, documents) independently of the main text stream.
* **Data Sovereignty (Privacy First):** The ETL pipeline executes entirely within the local environment. Sensitive communication records are never transmitted to third-party servers.

---

## Data Inspection Interface

The frontend serves as a responsive inspection tool for the parsed dataset, adapting its layout logic based on the host device capabilities.

### Desktop View
On high-resolution displays, the application renders a productivity-focused three-pane layout:
* **Archive Navigation:** Persistent access to indexed chat folders.
* **Active Dataset:** Wide-screen message view with granular search controls.
* **Media Inspector:** Side-by-side asset browsing without context switching.

### Mobile View
On touch devices (<768px), the system shifts to a mobile-optimised layout:
* **Off-Canvas Navigation:** Slide-out drawers for navigation and media to maximise the reading viewport.
* **Touch Optimisation:** Enlarged hit targets and swipe-friendly gestures.
* **Smart Viewport:** Disables accidental zooming to mimic native application behaviour.

---

## Memory Management & Data Traversal

To handle multi-gigabyte log files without crashing the browser, the application relies on an efficient memory management algorithm:

* **Index-Based Jumping:** When navigating to a search result, the engine bypasses linear scrolling. It calculates the target array index, clears the DOM to free memory, and injects a localised slice of history.
* **Bi-Directional Loading:** The engine detects scroll boundaries in both directions, seamlessly loading older context or newer records by dynamically slicing the parsed array.
* **Asset Lazy-Loading:** Heavy media assets outside the active viewport are effectively garbage-collected, keeping the memory footprint stable regardless of dataset size.

---

## Technical Specifications

This project demonstrates advanced data engineering and frontend architecture without reliance on abstraction layers.

* **Pipeline Core:** Vanilla JavaScript (ES6+) with the Asynchronous Fetch API for non-blocking data ingestion.
* **Text Processing:** Complex Regular Expression algorithms to parse non-standardised log files into strictly typed JSON structures.
* **Media Handling:** Custom video player controls with auto-pause logic to prevent audio overlap during rapid traversal.
* **Security:** Base64 encoding for sanitising DOM IDs, preventing selector errors from special characters in filenames or multi-lingual text.
* **Backend Indexer:** A lightweight PHP script to scan local directories and build the initial file inventory.

---

## Technologies

**Core Stack:** ![PHP](https://img.shields.io/badge/PHP-Backend-777BB4) ![JavaScript](https://img.shields.io/badge/JavaScript-ES6%2B-F7DF1E) ![HTML5](https://img.shields.io/badge/HTML5-Semantic-E34F26) ![CSS3](https://img.shields.io/badge/CSS3-Grid%2FFlex-1572B6)

**Engineering:** ![Regex](https://img.shields.io/badge/Regex-Parsing-critical) ![JSON](https://img.shields.io/badge/JSON-Data%20Structure-lightgrey) ![Git](https://img.shields.io/badge/Git-Version%20Control-F05032)

---

## Configuration

To enable accurate sender alignment in the dataset, you must define the host user.

1. Open **`app.js`**.
2. Locate the configuration constant at the top of the file:
   ```javascript
   const MY_NAME = "John Doe";
    ```
3.  Update this string to match the exact display name found in your exported `_chat.txt` logs.

---

## Deployment Protocol

1.  **Deploy Core Files:** Upload `index.html`, `app.js`, `style.css`, and `scan.php` to any PHP-enabled web server (Apache/Nginx).

2.  **Ingest Data:**
    * **Export:** In WhatsApp, select **Export Chat** > **Attach Media**.
    * **Deploy:** Unzip the resulting folder and upload it directly to the server directory (same level as `index.html`).

3.  **Initialise:** Navigate to the URL. The application will auto-scan the directory, run the ETL pipeline on the text logs, and build the inspection UI dynamically..

### Directory Hierarchy

```text
/public_html/whatsapp-analytics-engine/
├── index.html          # Application Shell
├── app.js              # State Management & Logic
├── style.css           # Visual Theme & Responsive Rules
├── scan.php            # File System Indexer
├── Family_Group/       # <--- Your WhatsApp Export Folder
│   ├── _chat.txt
│   ├── IMG-20240101.jpg
│   └── ...
└── Project_Team/       # <--- Another Export Folder
    ├── _chat.txt
    └── ...
```
---

<div align="center">
<br>

**_Architected by Nauman Shahid_**

<br>

[![Portfolio](https://img.shields.io/badge/Portfolio-nauman.cc-000000?style=for-the-badge&logo=googlechrome&logoColor=white)](https://www.nauman.cc)
[![GitHub](https://img.shields.io/badge/GitHub-nshah1d-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/nshah1d)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/nshah1d/)

</div>
<br>

---
