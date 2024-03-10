/* Fonts */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

/* Body Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #D2B48C; /* Light brown background color */
    margin: 0;
    padding: 20px;
}

/* Heading Styles */
h1 {
    text-align: center;
    color: #333; /* Dark gray heading color */
    margin-bottom: 30px;
}

/* Song Container Styles */
.song-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

/* Song Styles */
.song {
    background-color: #DEB887; /* Light brown background color for each song */
    color: #333; /* Dark gray text color */
    padding: 20px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
    transition: transform 0.3s ease;
    text-align: center;
    width: 200px;
    position: relative;
}

.song:hover {
    transform: translateY(-5px); /* Lift on hover */
}

.song a {
    color: #333; /* Dark gray link color */
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
}

.song a:hover {
    color: #DEB887; /* Light brown link color on hover */
}

/* Music Note Styles */
.music-note {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #333; /* Dark gray music note color */
    font-size: 24px;
}
