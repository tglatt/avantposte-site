document.querySelector('svg defs').innerHTML += `
    <symbol id="icon-matomo-arrow-right" viewbox="0 0 100 100">
        <path d="M50,90.52a3,3,0,0,1-2.13-5.15L80.21,53H12.5a3,3,0,0,1,0-6H80.21L47.87,14.63a3,3,0,1,1,4.27-4.27l37.5,37.5a3.08,3.08,0,0,1,.38.47l.17.32a1.09,1.09,0,0,1,.16.37l.08.28a.94.94,0,0,1,0,.11,3,3,0,0,1,0,1.18,1,1,0,0,1,0,.11l-.08.27a1.43,1.43,0,0,1-.05.18,1.61,1.61,0,0,1-.1.19l-.13.24a2.83,2.83,0,0,1-.42.55l-37.5,37.5A3,3,0,0,1,50,90.52Z"/>
    </symbol>
    <symbol id="icon-matomo-arrow-up" viewbox="0 0 100 100">
        <path d="M12.06,94.42A7,7,0,0,1,7.11,82.47l63.4-63.4H21.65a7,7,0,1,1,0-14h66a7,7,0,0,1,1.16.13,4.45,4.45,0,0,1,.53.15l.18.06a5,5,0,0,1,.6.2,5.26,5.26,0,0,1,.59.3l.09.05a4.88,4.88,0,0,1,.53.29,7,7,0,0,1,1.94,1.94,4.2,4.2,0,0,1,.26.46l.08.15a5.36,5.36,0,0,1,.3.6,5.14,5.14,0,0,1,.2.6l0,.1a4.93,4.93,0,0,1,.17.6,7,7,0,0,1,.14,1.37V77.83a7,7,0,0,1-14,0V29L17,92.37A7,7,0,0,1,12.06,94.42Z"/>
    </symbol>
    <symbol id="icon-matomo-bounce" viewbox="0 0 100 100">
        <path d="M89.89,48.92,70.94,30a3,3,0,0,0-4.24,4.24L80.52,48.05H12a3,3,0,1,0,0,6H80.52L66.7,67.87a3,3,0,1,0,4.24,4.24L89.89,53.17a3,3,0,0,0,0-4.25ZM72.07,13.32a3,3,0,0,1-3,3h-37a2,2,0,0,0-2,2V37.63a3,3,0,0,1-6,0V15.33a5,5,0,0,1,5-5H69.07A3,3,0,0,1,72.07,13.32Zm0,74.92a3,3,0,0,1-3,3H29.13a5,5,0,0,1-5-5V64.47a3,3,0,0,1,6,0V83.25a2,2,0,0,0,2,2h37A3,3,0,0,1,72.07,88.24Z"/>
    </symbol>
    <symbol id="icon-matomo-calendar" viewbox="0 0 100 100">
        <path d="M78.47,14.47h-9.2V9.34a3,3,0,1,0-6,0v5.13H36.73V9.34a3,3,0,1,0-6,0v5.13h-9.2A11.15,11.15,0,0,0,10.4,25.6V82.53A11.15,11.15,0,0,0,21.53,93.66H78.47A11.15,11.15,0,0,0,89.6,82.53V25.6A11.15,11.15,0,0,0,78.47,14.47Zm-56.93,6h9.2V25.6a3,3,0,0,0,6,0V20.47H63.27V25.6a3,3,0,0,0,6,0V20.47h9.2A5.14,5.14,0,0,1,83.6,25.6V38.87H16.4V25.6A5.14,5.14,0,0,1,21.53,20.47Zm56.93,67.2H21.53a5.14,5.14,0,0,1-5.13-5.13V44.87H83.6V82.53A5.14,5.14,0,0,1,78.47,87.66Zm-8.63-25H30.16a3,3,0,0,1,0-6H69.84a3,3,0,0,1,0,6ZM59.57,73a3,3,0,0,0-3-3H30.16a3,3,0,0,0,0,6h26.4A3,3,0,0,0,59.57,73Z"/>
    </symbol>
    <symbol id="icon-matomo-device-camera" viewbox="0 0 100 100">
        <path d="M50.23,38.52A13.79,13.79,0,1,1,36.44,52.31,13.79,13.79,0,0,1,50.23,38.52ZM37.31,9.21l-7.89,8.62H15.76a8.64,8.64,0,0,0-8.62,8.62V78.17a8.64,8.64,0,0,0,8.62,8.62h69a8.64,8.64,0,0,0,8.62-8.62V26.45a8.64,8.64,0,0,0-8.62-8.62H71L63.16,9.21ZM50.23,73.86A21.55,21.55,0,1,1,71.78,52.31,21.56,21.56,0,0,1,50.23,73.86Z"/>
    </symbol>
    <symbol id="icon-matomo-device-car" viewbox="0 0 100 100">
        <path d="M83.07,16.59a7.19,7.19,0,0,0-6.79-4.83H23.71a7.19,7.19,0,0,0-6.79,4.83L7,45.22V83.46a4.79,4.79,0,0,0,4.78,4.78h4.78a4.78,4.78,0,0,0,4.78-4.78V78.68H78.68v4.78a4.79,4.79,0,0,0,4.78,4.78h4.78A4.78,4.78,0,0,0,93,83.46V45.22ZM23.71,64.34a7.17,7.17,0,1,1,7.17-7.17A7.16,7.16,0,0,1,23.71,64.34Zm52.58,0a7.17,7.17,0,1,1,7.17-7.17A7.16,7.16,0,0,1,76.29,64.34ZM16.54,40.44l7.17-21.51H76.29l7.17,21.51Z"/>
    </symbol>
    <symbol id="icon-matomo-device-console" viewbox="0 0 100 100">
        <path d="M85.2,25.54H14.8A7.84,7.84,0,0,0,7,33.36V64.64a7.84,7.84,0,0,0,7.82,7.82H85.2A7.84,7.84,0,0,0,93,64.64V33.36A7.84,7.84,0,0,0,85.2,25.54ZM46.09,52.91H34.36V64.64H26.54V52.91H14.8V45.09H26.54V33.36h7.82V45.09H46.09Zm17.6,7.82a5.87,5.87,0,1,1,5.87-5.87A5.86,5.86,0,0,1,63.69,60.73ZM79.33,49a5.87,5.87,0,1,1,5.87-5.87A5.86,5.86,0,0,1,79.33,49Z"/>
    </symbol>
    <symbol id="icon-matomo-device-desktop" viewbox="0 0 100 100">
        <path d="M85.74,10.5H14.65a7.92,7.92,0,0,0-7.9,7.9V65.8a7.92,7.92,0,0,0,7.9,7.9H42.3v7.9H34.4v7.9H66V81.6H58.1V73.7H85.74a7.92,7.92,0,0,0,7.9-7.9V18.4A7.92,7.92,0,0,0,85.74,10.5Zm0,55.3H14.65V18.4H85.74Z"/>
    </symbol>
    <symbol id="icon-matomo-device-mobile" viewbox="0 0 100 100">
        <path d="M69.06,8.11l-38.11,0a7.64,7.64,0,0,0-7.62,7.62V84.3a7.64,7.64,0,0,0,7.62,7.62H69.06a7.64,7.64,0,0,0,7.62-7.62V15.7A7.61,7.61,0,0,0,69.06,8.11Zm0,68.56H30.94V23.32H69.06Z"/>
    </symbol>
    <symbol id="icon-matomo-device-tablet" viewbox="0 0 100 100">
        <path d="M71,8.08H29A10.47,10.47,0,0,0,18.56,18.56V81.44A10.47,10.47,0,0,0,29,91.92H71A10.47,10.47,0,0,0,81.44,81.44V18.56A10.47,10.47,0,0,0,71,8.08ZM57,84.94H43V81.44H57ZM75.33,74.46H24.67V18.56H75.33Z"/>
    </symbol>
    <symbol id="icon-matomo-device-tv" viewbox="0 0 100 100">
        <path d="M84.51,25H55.38L68,12.35,65.32,9.62,50,25,34.62,9.62,31.9,12.35,44.56,25H15.43a7.67,7.67,0,0,0-7.68,7.68V78.7a7.7,7.7,0,0,0,7.68,7.68H84.51a7.7,7.7,0,0,0,7.68-7.68V32.65A7.67,7.67,0,0,0,84.51,25Zm0,53.73H15.43V32.65H84.51ZM38.46,40.32V71L65.32,55.68Z"/>
    </symbol>
    <symbol id="icon-matomo-duration" viewbox="0 0 100 100">
        <path d="M77.57,28.29l3.76-3.76a3,3,0,1,0-4.24-4.24l-4,4A38.2,38.2,0,0,0,53,16.72v-4.8h6.48a3,3,0,0,0,0-6H40.54a3,3,0,0,0,0,6H47v4.8A38.46,38.46,0,1,0,77.57,28.29ZM50,87.41A32.41,32.41,0,1,1,82.41,55,32.45,32.45,0,0,1,50,87.41Zm17.39-22a3,3,0,0,1-4.11,1L48.46,57.58l-.06,0a3,3,0,0,1-.27-.2l-.2-.17c-.07-.07-.13-.15-.2-.22s-.13-.14-.18-.22-.1-.17-.15-.25-.1-.16-.13-.25-.07-.19-.1-.28-.06-.18-.08-.27,0-.18,0-.27a3,3,0,0,1,0-.32S47,55,47,55V32.15a3,3,0,0,1,6,0V53.3l13.35,8A3,3,0,0,1,67.39,65.37Z"/>
    </symbol>
    <symbol id="icon-matomo-exit" viewbox="0 0 100 100">
        <path d="M80.29,48.66l-18.95-19A3,3,0,1,0,57.1,34L70.93,47.78H38.27a3,3,0,0,0,0,6H70.93L57.1,67.6a3,3,0,1,0,4.24,4.25l18.95-19a3,3,0,0,0,0-4.24ZM67.48,88.24a3,3,0,0,1-3,3H24.54a5,5,0,0,1-5-5V15.33a5,5,0,0,1,5-5H64.48a3,3,0,0,1,0,6h-37a2,2,0,0,0-2,2V83.25a2,2,0,0,0,2,2h37A3,3,0,0,1,67.48,88.24Z"/>
    </symbol>
    <symbol id="icon-matomo-external-link" viewbox="0 0 100 100">
        <path d="M80.18,54.45V81.13A12.41,12.41,0,0,1,67.79,93.52H18.88A12.41,12.41,0,0,1,6.48,81.13V32.21A12.41,12.41,0,0,1,18.88,19.82H45.55a3.5,3.5,0,0,1,0,7H18.88a5.4,5.4,0,0,0-5.39,5.39V81.13a5.4,5.4,0,0,0,5.39,5.39H67.79a5.4,5.4,0,0,0,5.39-5.39V54.45a3.5,3.5,0,0,1,7,0ZM93.45,9.3c0-.1-.06-.2-.09-.3a3.45,3.45,0,0,0-.11-.35,3.45,3.45,0,0,0-.17-.33c0-.09-.09-.18-.15-.27a3.52,3.52,0,0,0-.43-.53h0A3.51,3.51,0,0,0,92,7.07c-.08-.06-.18-.09-.26-.14A2,2,0,0,0,91,6.64c-.1,0-.2-.07-.31-.09a3.51,3.51,0,0,0-.64-.06H63.34a3.5,3.5,0,0,0,0,7H81.57L38.63,56.42a3.5,3.5,0,1,0,4.95,5L86.52,18.43V36.66a3.5,3.5,0,0,0,7,0V10A3.51,3.51,0,0,0,93.45,9.3Z"/>
    </symbol>
    <symbol id="icon-matomo-external-globe" viewbox="0 0 100 100">
        <path d="M50.14,6.61A43.39,43.39,0,1,0,93.53,50,43.44,43.44,0,0,0,50.14,6.61ZM87.4,47H69.17A64.75,64.75,0,0,0,56.94,13.24,37.45,37.45,0,0,1,87.4,47ZM37.14,53h26a58.76,58.76,0,0,1-13,32.8A58.77,58.77,0,0,1,37.14,53Zm0-6a58.76,58.76,0,0,1,13-32.79A58.75,58.75,0,0,1,63.14,47Zm6.2-33.76A64.76,64.76,0,0,0,31.11,47H12.88A37.45,37.45,0,0,1,43.33,13.24ZM12.88,53H31.11A64.76,64.76,0,0,0,43.34,86.76,37.45,37.45,0,0,1,12.88,53ZM56.94,86.76A64.75,64.75,0,0,0,69.17,53H87.4A37.45,37.45,0,0,1,56.94,86.76Z"/>
    </symbol>
    <symbol id="icon-matomo-page" viewbox="0 0 100 100">
        <path d="M27.73,93a10,10,0,0,1-10-10V17a10,10,0,0,1,10-10h33a2.78,2.78,0,0,1,2.52,1.57L85,30.23a2.8,2.8,0,0,1,1.34,2.39V83a10,10,0,0,1-10,10Zm0-80.38A4.41,4.41,0,0,0,23.33,17V83a4.41,4.41,0,0,0,4.41,4.41H76.31A4.41,4.41,0,0,0,80.72,83V35.42H66.12a8.22,8.22,0,0,1-8.21-8.21V12.61Zm35.78,14.6a2.61,2.61,0,0,0,2.6,2.6H76.63l-13.11-13Z"/>
    </symbol>
    <symbol id="icon-matomo-question-mark" viewbox="0 0 100 100">
        <path d="M49.65,90.82A41.08,41.08,0,1,1,90.73,49.74,41.13,41.13,0,0,1,49.65,90.82Zm0-76.33A35.25,35.25,0,1,0,84.9,49.74,35.29,35.29,0,0,0,49.65,14.49Zm0,60.31a6,6,0,1,1,6-6A6,6,0,0,1,49.65,74.81Zm-4.76-16.7V55.76c0-4.87,3.15-7,7.26-9.32l.26-.14c2.79-1.56,5.42-3,5.42-6.06,0-3.62-4.11-6.06-7.95-6.06-4.47,0-6.67,2.31-9.08,5.33l-.71.89L34,35.78l.64-.92c4.08-5.87,9-8.49,16-8.49,7.61,0,16.11,6,16.11,14,0,6.43-4.14,8.82-7.8,10.93-2.34,1.35-4.54,2.62-4.54,4.89v2Z"/>
    </symbol>
    <symbol id="icon-matomo-refresh" viewbox="0 0 100 100">
    	<path d="M92.06,44.18a3,3,0,0,1-.2.27c0,.05-.08.11-.13.17l0,0a3,3,0,0,1-.32.28l-.14.12a3,3,0,0,1-.48.27l0,0a3,3,0,0,1-.57.18,3,3,0,0,1-.52.05H68a3,3,0,0,1,0-6H82L70.81,29.07A29.36,29.36,0,0,0,22.31,40a3,3,0,1,1-5.66-2A35.36,35.36,0,0,1,75,24.76L86.54,35.62V21a3,3,0,1,1,6,0V42.55c0,.07,0,.13,0,.2a3,3,0,0,1,0,.34c0,.09,0,.18-.07.27a3,3,0,0,1-.09.29,2.88,2.88,0,0,1-.13.27C92.16,44,92.12,44.09,92.06,44.18ZM81.52,57.7a3,3,0,0,0-3.83,1.83,29.36,29.36,0,0,1-48.5,10.89L18,59.93H32a3,3,0,1,0,0-6H10.41A3,3,0,0,0,10,54l-.22,0a3,3,0,0,0-.32.1l-.24.08L9,54.32l-.25.14-.19.16a3,3,0,0,0-.26.23l0,0c0,.05-.08.11-.13.17a3,3,0,0,0-.2.27c-.05.08-.09.17-.14.25a2.93,2.93,0,0,0-.13.27,3,3,0,0,0-.09.29c0,.09-.05.17-.07.27a3,3,0,0,0,0,.34c0,.07,0,.13,0,.2V78.5a3,3,0,1,0,6,0V63.87L25,74.73a35.36,35.36,0,0,0,58.34-13.2A3,3,0,0,0,81.52,57.7Z"/>
    </symbol>
    <symbol id="icon-matomo-search" viewbox="0 0 100 100">
		<path d="M91.8,87.56,68.93,64.68a35,35,0,1,0-4.24,4.24L87.56,91.8a3,3,0,1,0,4.24-4.24ZM13.32,42.23A28.91,28.91,0,1,1,62.8,62.51l-.16.13s-.08.11-.13.16A28.89,28.89,0,0,1,13.32,42.23Z"/>
    </symbol>
    <symbol id="icon-matomo-social-dribble" viewbox="0 0 100 100">
		<path fill="#ec4989" d="M70.73,80.77a160.33,160.33,0,0,0-7.22-26.5,53.79,53.79,0,0,1,23.12,1.62,37.11,37.11,0,0,1-15.9,24.88ZM50,87.1A37,37,0,0,1,26.36,78.6c.49.4.83.65.83.65s7.11-15.51,29.11-23.18l.25-.08a154.36,154.36,0,0,1,7.92,28.17A37,37,0,0,1,50,87.1ZM12.9,50c0-.39,0-.78,0-1.17A136,136,0,0,0,51,43.54c1.06,2.08,2.08,4.2,3,6.31-.49.13-1,.28-1.46.44-20,6.47-30.18,24.48-30.18,24.48l0,0A37,37,0,0,1,12.9,50ZM34.17,16.45A221.88,221.88,0,0,1,47.95,37.82a137.23,137.23,0,0,1-34.25,4.53,37.11,37.11,0,0,1,20.48-25.9ZM41.11,14h0L41,14l.12,0ZM74.5,22.16c-.09.14-5.37,8.18-19.38,13.43A188.5,188.5,0,0,0,41.26,13.95,37,37,0,0,1,74.5,22.16ZM87.09,49.63a85.81,85.81,0,0,0-25.84-1.22c-.27-.63-.53-1.27-.8-1.91-.77-1.82-1.6-3.62-2.47-5.38,14.65-6,20.6-14.58,20.67-14.68a37,37,0,0,1,8.44,23.19Zm5.47-8.37A43.59,43.59,0,0,0,90,33.09a42.92,42.92,0,0,0-4-7.38,43.45,43.45,0,0,0-72,0A43.29,43.29,0,0,0,7.44,41.26a44,44,0,0,0,0,17.5A43.49,43.49,0,0,0,14,74.29,43.44,43.44,0,0,0,25.71,86a43.53,43.53,0,0,0,7.38,4,42.79,42.79,0,0,0,8.16,2.53,43.5,43.5,0,0,0,17.5,0A42.79,42.79,0,0,0,66.91,90a43.29,43.29,0,0,0,7.38-4A43.36,43.36,0,0,0,86,74.29a43.49,43.49,0,0,0,6.54-15.54,44,44,0,0,0,0-17.5Z"/>
    </symbol>
    <symbol id="icon-matomo-social-facebook" viewbox="0 0 100 100">
		<path fill="#4460a0" d="M93.08,9.73V90.27a2.8,2.8,0,0,1-2.8,2.81H66.37V59.71H77.57l1.69-13H66.37V38.4c0-3.76,1-6.32,6.44-6.32h6.9V20.45a91.44,91.44,0,0,0-10-.52c-9.93,0-16.74,6.07-16.74,17.2v9.58H41.73v13H52.94V93.08H9.73a2.81,2.81,0,0,1-2.81-2.81V9.73A2.82,2.82,0,0,1,9.73,6.92H90.28A2.81,2.81,0,0,1,93.08,9.73Z"/>
    </symbol>
    <symbol id="icon-matomo-social-flickr" viewbox="0 0 100 100">
		<path fill="#ff007f" d="M93.19,49.22a19,19,0,1,1-19-18.76,18.89,18.89,0,0,1,19,18.76"/>
		<path fill="#0960d5" d="M44.86,49.22A18.9,18.9,0,0,1,25.82,68a18.76,18.76,0,1,1,0-37.53,18.9,18.9,0,0,1,19,18.76"/>
    </symbol>
    <symbol id="icon-matomo-social-foursquare" viewbox="0 0 100 100">
		<path fill="#fa4778" d="M70.78,18.69,68.7,28.87a2.63,2.63,0,0,1-2.5,2H48.08a3.73,3.73,0,0,0-3.7,3.74v2.23a3.73,3.73,0,0,0,3.7,3.74H63.39a2.43,2.43,0,0,1,2.32,2.89c-.3,1.57-1.91,9.52-2.09,10.37a2.55,2.55,0,0,1-2.5,2H48.61c-2.62.06-3.16.12-4.71,2S28.65,77.26,28.65,77.26c-.12.18-.24.12-.24-.06v-59a2.53,2.53,0,0,1,2.5-2.53H68.52a2.45,2.45,0,0,1,2.26,3M73.52,6H27.1c-6.38,0-8.28,4.88-8.28,8V88.53c0,3.68,1.85,4.76,2.86,5.18a5.44,5.44,0,0,0,5.6-1.21l22.41-26.4c.36-.42.54-.42.77-.42H64.41c6,0,7.09-4.16,7.75-6.69.54-2.11,6.68-32.24,8.58-41.76C82.17,9.89,80.32,6,73.52,6"/>
    </symbol>
    <symbol id="icon-matomo-social-github" viewbox="0 0 100 100">
		<path d="M50,6.58a44.17,44.17,0,0,1,13.93,86c-2.23.43-3-.94-3-2.12,0-1.45.06-6.21.06-12.11,0-4.12-1.41-6.81-3-8.17C67.77,69.1,78,65.37,78,48.41a17.07,17.07,0,0,0-4.52-11.85c.45-1.12,2-5.6-.44-11.68,0,0-3.69-1.19-12.08,4.52a41.49,41.49,0,0,0-22,0C30.6,23.7,26.9,24.88,26.9,24.88,24.51,31,26,35.45,26.47,36.56a17.1,17.1,0,0,0-4.53,11.85c0,16.91,10.26,20.7,20,21.81a9.44,9.44,0,0,0-2.79,5.9c-2.51,1.13-8.87,3.08-12.8-3.67,0,0-2.32-4.24-6.73-4.55,0,0-4.3-.06-.3,2.68,0,0,2.88,1.36,4.88,6.46,0,0,2.58,8.59,14.81,5.92,0,3.68.06,6.46.06,7.51s-.8,2.53-3,2.13A44.17,44.17,0,0,1,50,6.58"/>
    </symbol>
    <symbol id="icon-matomo-social-google" viewbox="0 0 100 100">
		<path fill="#f93f2d" d="M83.69,45.1V35.58H76.89V45.1H67.11v6.8h9.78v9.8h6.79v-9.8h9.51V45.1Zm-49.44-.54V55.44H49.08c-2.32,7.06-5.94,10.9-14.83,10.9a16.33,16.33,0,0,1,0-32.66,15.53,15.53,0,0,1,10.65,4c2.26-2.26,2.07-2.58,7.81-8A27.46,27.46,0,1,0,34.24,77.49c22.65,0,28.19-19.76,26.35-32.93Z"/>
    </symbol>
    <radialGradient id="instagram-a" cx="18.04" cy="-419.56" r="113.65" gradientTransform="matrix(1, 0, 0, -1, 0, -325.16)" gradientUnits="userSpaceOnUse">
		<stop offset="0.09" stop-color="#fa8f21"/>
		<stop offset="0.78" stop-color="#d82d7e"/>
	</radialGradient>
	<radialGradient id="instagram-b" cx="59.27" cy="-423.46" r="89.57" gradientTransform="matrix(1, 0, 0, -1, 0, -325.16)" gradientUnits="userSpaceOnUse">
		<stop offset="0.64" stop-color="#8c3aaa" stop-opacity="0"/>
		<stop offset="1" stop-color="#8c3aaa"/>
	</radialGradient>
    <symbol id="icon-matomo-social-instagram" viewbox="0 0 100 100">
		<path fill="url(#instagram-a)" d="M35.49,50.45A14.51,14.51,0,1,1,50,65,14.51,14.51,0,0,1,35.49,50.45m-7.84,0A22.35,22.35,0,1,0,50,28.09,22.35,22.35,0,0,0,27.65,50.45M68,27.21A5.22,5.22,0,1,0,73.24,22h0A5.23,5.23,0,0,0,68,27.21M32.41,85.88a24.06,24.06,0,0,1-8.08-1.5,13.53,13.53,0,0,1-5-3.26,13.43,13.43,0,0,1-3.26-5A24,24,0,0,1,14.57,68c-.21-4.59-.25-6-.25-17.59s0-13,.25-17.59a24.22,24.22,0,0,1,1.5-8.08,13.53,13.53,0,0,1,3.26-5,13.42,13.42,0,0,1,5-3.26A24,24,0,0,1,32.41,15c4.59-.21,6-.25,17.59-.25s13,0,17.59.25a24.22,24.22,0,0,1,8.08,1.5,14.41,14.41,0,0,1,8.26,8.26,24,24,0,0,1,1.5,8.08c.21,4.59.25,6,.25,17.59s0,13-.25,17.59a24.15,24.15,0,0,1-1.5,8.08,14.41,14.41,0,0,1-8.26,8.26,24,24,0,0,1-8.08,1.5c-4.59.21-6,.25-17.59.25s-13,0-17.59-.25m-.36-78.7a31.92,31.92,0,0,0-10.57,2,21.35,21.35,0,0,0-7.71,5,21.27,21.27,0,0,0-5,7.71,31.93,31.93,0,0,0-2,10.57c-.21,4.64-.26,6.13-.26,17.95s0,13.31.26,17.95A31.93,31.93,0,0,0,8.75,79a21.28,21.28,0,0,0,5,7.71,21.4,21.4,0,0,0,7.71,5,32,32,0,0,0,10.57,2c4.64.21,6.13.26,17.95.26s13.31,0,17.95-.26a31.93,31.93,0,0,0,10.57-2A22.26,22.26,0,0,0,91.25,79a31.84,31.84,0,0,0,2-10.57c.21-4.65.26-6.13.26-17.95s0-13.31-.26-17.95a31.92,31.92,0,0,0-2-10.57,21.41,21.41,0,0,0-5-7.71,21.3,21.3,0,0,0-7.71-5A31.88,31.88,0,0,0,68,7.18C63.31,7,61.83,6.92,50,6.92s-13.31,0-18,.26"/>
		<path fill="url(#instagram-b)" d="M35.49,50.45A14.51,14.51,0,1,1,50,65,14.51,14.51,0,0,1,35.49,50.45m-7.84,0A22.35,22.35,0,1,0,50,28.09,22.35,22.35,0,0,0,27.65,50.45M68,27.21A5.22,5.22,0,1,0,73.24,22h0A5.23,5.23,0,0,0,68,27.21M32.41,85.88a24.06,24.06,0,0,1-8.08-1.5,13.53,13.53,0,0,1-5-3.26,13.43,13.43,0,0,1-3.26-5A24,24,0,0,1,14.57,68c-.21-4.59-.25-6-.25-17.59s0-13,.25-17.59a24.22,24.22,0,0,1,1.5-8.08,13.53,13.53,0,0,1,3.26-5,13.42,13.42,0,0,1,5-3.26A24,24,0,0,1,32.41,15c4.59-.21,6-.25,17.59-.25s13,0,17.59.25a24.22,24.22,0,0,1,8.08,1.5,14.41,14.41,0,0,1,8.26,8.26,24,24,0,0,1,1.5,8.08c.21,4.59.25,6,.25,17.59s0,13-.25,17.59a24.15,24.15,0,0,1-1.5,8.08,14.41,14.41,0,0,1-8.26,8.26,24,24,0,0,1-8.08,1.5c-4.59.21-6,.25-17.59.25s-13,0-17.59-.25m-.36-78.7a31.92,31.92,0,0,0-10.57,2,21.35,21.35,0,0,0-7.71,5,21.27,21.27,0,0,0-5,7.71,31.93,31.93,0,0,0-2,10.57c-.21,4.64-.26,6.13-.26,17.95s0,13.31.26,17.95A31.93,31.93,0,0,0,8.75,79a21.28,21.28,0,0,0,5,7.71,21.4,21.4,0,0,0,7.71,5,32,32,0,0,0,10.57,2c4.64.21,6.13.26,17.95.26s13.31,0,17.95-.26a31.93,31.93,0,0,0,10.57-2A22.26,22.26,0,0,0,91.25,79a31.84,31.84,0,0,0,2-10.57c.21-4.65.26-6.13.26-17.95s0-13.31-.26-17.95a31.92,31.92,0,0,0-2-10.57,21.41,21.41,0,0,0-5-7.71,21.3,21.3,0,0,0-7.71-5A31.88,31.88,0,0,0,68,7.18C63.31,7,61.83,6.92,50,6.92s-13.31,0-18,.26"/>
    </symbol>
    <symbol id="icon-matomo-social-linkedin" viewbox="0 0 100 100">
		<path fill="#007ebb" d="M88.7,6.5H11.3a4.81,4.81,0,0,0-4.8,4.8V88.69a4.8,4.8,0,0,0,4.8,4.8H88.7a4.8,4.8,0,0,0,4.8-4.8V11.3A4.81,4.81,0,0,0,88.7,6.5ZM32.89,79.78H19.75V40.25H32.89ZM26.33,34.85h-.09c-4.4,0-7.27-3-7.27-6.82s2.94-6.83,7.43-6.83,7.27,3,7.36,6.83S30.9,34.85,26.33,34.85ZM80.25,79.78H67.13V58.63c0-5.31-1.9-8.94-6.65-8.94a7.18,7.18,0,0,0-6.74,4.8,9.11,9.11,0,0,0-.43,3.21V79.78H40.16s.18-35.82,0-39.53H53.3v5.58a13.05,13.05,0,0,1,11.84-6.51c8.65,0,15.12,5.65,15.12,17.78ZM53.3,46v-.15l-.09.15Z"/>
		<path fill="#fff" d="M53.3,45.83V46h-.09Z"/>
    </symbol>
    <symbol id="icon-matomo-social-pinterest" viewbox="0 0 100 100">
		<path fill="#cc2127" d="M50,7.19A42.81,42.81,0,1,1,37.87,91a35.7,35.7,0,0,0,4.31-9.17c.52-1.9,3-11.76,3-11.76C46.68,73,51,75.45,55.65,75.45c13.77,0,23.1-12.54,23.1-29.34,0-12.69-10.76-24.53-27.1-24.53-20.34,0-30.59,14.59-30.59,26.75,0,7.36,2.78,13.91,8.77,16.36A1.47,1.47,0,0,0,32,63.61c.2-.75.67-2.65.87-3.43a2.08,2.08,0,0,0-.61-2.39,12.35,12.35,0,0,1-2.82-8.4c0-10.81,8.09-20.49,21.07-20.49,11.49,0,17.81,7,17.81,16.4,0,12.34-5.46,22.76-13.57,22.76-4.48,0-7.83-3.7-6.76-8.25,1.28-5.42,3.78-11.28,3.78-15.19,0-3.5-1.88-6.43-5.77-6.43-4.58,0-8.26,4.74-8.26,11.08a16.48,16.48,0,0,0,1.36,6.78S34.39,75.9,33.56,79.38a37.88,37.88,0,0,0-.74,9.83A42.81,42.81,0,0,1,50,7.19"/>
    </symbol>
    <symbol id="icon-matomo-social-reddit" viewbox="0 0 100 100">
		<path fill="#ff5700" d="M63,61.55a6,6,0,0,1-6-5.88,6.07,6.07,0,0,1,6-6,6,6,0,0,1,5.93,6A5.91,5.91,0,0,1,63,61.55M64.43,73c-3.05,3-7.76,4.49-14.39,4.49H50C43.32,77.46,38.62,76,35.57,73a2.35,2.35,0,0,1,0-3.36,2.41,2.41,0,0,1,3.39,0c2.1,2.08,5.7,3.1,11,3.1H50c5.3,0,8.9-1,11-3.1a2.41,2.41,0,0,1,3.39,0,2.36,2.36,0,0,1,0,3.36M31,55.67a6.06,6.06,0,0,1,6-6,6,6,0,0,1,5.93,6A5.91,5.91,0,0,1,37,61.55a6,6,0,0,1-6-5.88M79.21,18.22a4,4,0,1,1-4,4,4,4,0,0,1,4-4m14.62,31a10.55,10.55,0,0,0-17.17-8.1A49.91,49.91,0,0,0,53.34,34.2L57.9,19.91l12.53,2.92a8.75,8.75,0,1,0,1-4.65l-14.56-3.4A2.39,2.39,0,0,0,54,16.39L48.35,34.11c-9.42.23-18.27,2.65-25.16,6.88a10.55,10.55,0,0,0-17,8.22,10.4,10.4,0,0,0,4.56,8.59,18.16,18.16,0,0,0-.18,2.51c0,7.2,4.22,13.89,11.89,18.85,7.35,4.75,17.07,7.37,27.38,7.37s20-2.62,27.38-7.37c7.67-5,11.89-11.65,11.89-18.85A18.21,18.21,0,0,0,88.94,58a10.42,10.42,0,0,0,4.89-8.81"/>
    </symbol>
    <symbol id="icon-matomo-social-tumblr" viewbox="0 0 100 100">
		<path style="#34455d" d="M68.48,75.74,72.54,88c-1.52,2.29-8.4,4.94-14.6,5-18.37.32-25.33-13.37-25.33-23V41.91H24.07V30.78c12.79-4.71,15.87-16.5,16.59-23.22a.67.67,0,0,1,.61-.64H53.62V28.87H70.5v13H53.56V68.74c.05,3.65,1.36,8.68,8.12,8.49a19.5,19.5,0,0,0,6.8-1.49"/>
    </symbol>
    <symbol id="icon-matomo-social-twitter" viewbox="0 0 100 100">
		<path fill="#00aaec" d="M93.32,22.44a36.49,36.49,0,0,1-8.86,9.43c0,.78,0,1.57,0,2.36,0,24.09-17.88,51.86-50.58,51.86A49.49,49.49,0,0,1,6.68,77.92a35.58,35.58,0,0,0,4.24.25A35.1,35.1,0,0,0,33,70.36,17.84,17.84,0,0,1,16.39,57.71a17.27,17.27,0,0,0,3.35.32,17,17,0,0,0,4.68-.64A18.12,18.12,0,0,1,10.15,39.52V39.3a17.45,17.45,0,0,0,8.06,2.27A18.35,18.35,0,0,1,10.3,26.4a18.56,18.56,0,0,1,2.41-9.17A50,50,0,0,0,49.35,36.28a18.6,18.6,0,0,1-.46-4.15A18,18,0,0,1,66.66,13.9a17.53,17.53,0,0,1,13,5.75,35,35,0,0,0,11.3-4.42,18.19,18.19,0,0,1-7.82,10.08,34.72,34.72,0,0,0,10.21-2.87"/>
    </symbol>
    <symbol id="icon-matomo-social-vimeo" viewbox="0 0 100 100">
		<path fill="#00b2ea" d="M93.79,30.57q-.57,12.57-17.73,34.36Q58.31,87.72,46,87.72q-7.6,0-12.86-13.89-3.52-12.76-7-25.49-3.91-13.91-8.39-13.91c-.65,0-2.92,1.35-6.83,4.06L6.81,33.28q6.43-5.58,12.68-11.19,8.57-7.34,12.87-7.73,10.13-1,12.49,13.71,2.51,15.84,3.5,19.7,2.93,13.13,6.44,13.12,2.72,0,8.19-8.48t5.85-12.94c.52-4.89-1.43-7.32-5.85-7.32a16.77,16.77,0,0,0-6.44,1.35Q63,12.82,81.13,13.4q13.44.37,12.66,17.17"/>
    </symbol>
    <symbol id="icon-matomo-social-youtube" viewbox="0 0 100 100">
		<path fill="#ce1312" d="M41,61.88V37.34L64.48,49.65Zm51.47-28.8s-.85-6-3.45-8.67c-3.3-3.48-7-3.5-8.69-3.7C68.23,19.83,50,19.83,50,19.83h0s-18.21,0-30.35.88c-1.7.2-5.39.22-8.69,3.7-2.6,2.65-3.45,8.67-3.45,8.67a133.1,133.1,0,0,0-.87,14.14v6.63A133,133,0,0,0,7.49,68s.85,6,3.45,8.67c3.3,3.48,7.64,3.37,9.57,3.74,6.94.67,29.5.88,29.5.88s18.23,0,30.37-.91c1.69-.2,5.39-.22,8.69-3.7C91.66,74,92.51,68,92.51,68a133,133,0,0,0,.87-14.14V47.22a133.1,133.1,0,0,0-.87-14.14Z"/>
    </symbol>
    <symbol id="icon-matomo-users" viewbox="0 0 100 100">
		<path d="M68.27,85.89a3,3,0,0,1-3-3V75.58A11.63,11.63,0,0,0,53.65,64H24.42A11.63,11.63,0,0,0,12.81,75.58v7.31a3,3,0,0,1-6,0V75.58A17.64,17.64,0,0,1,24.42,58H53.65A17.64,17.64,0,0,1,71.27,75.58v7.31A3,3,0,0,1,68.27,85.89ZM56.65,31.73A17.62,17.62,0,1,0,39,49.35,17.64,17.64,0,0,0,56.65,31.73Zm-6,0A11.62,11.62,0,1,1,39,20.11,11.63,11.63,0,0,1,50.65,31.73ZM93.19,82.89V75.58A17.61,17.61,0,0,0,80,58.53a3,3,0,0,0-1.5,5.81,11.61,11.61,0,0,1,8.71,11.24v7.31a3,3,0,0,0,6,0ZM65.36,48.81a17.62,17.62,0,0,0,0-34.13,3,3,0,1,0-1.49,5.81,11.62,11.62,0,0,1,0,22.51,3,3,0,1,0,1.49,5.81Z"/>
    </symbol>
`;