function displayPlanetPopup(planetClass, planetId) {
    document.querySelector(planetClass).addEventListener('mouseover', (event) => {
        document.querySelector(planetId).classList.remove('hidden-on-desktop')
        document.querySelector(planetClass).classList.add('hover')
    })

    document.querySelector(planetClass).addEventListener('mouseout', (event) => {
        document.querySelector(planetId).classList.add('hidden-on-desktop')
        document.querySelector(planetClass).classList.remove('hover')
    })
}

displayPlanetPopup('.Earth', '#Earth')
displayPlanetPopup('.Venus', '#Venus')
displayPlanetPopup('.Mercury', '#Mercury')
displayPlanetPopup('.Mars', '#Mars')
displayPlanetPopup('.Jupiter', '#Jupiter')
displayPlanetPopup('.Saturn', '#Saturn')
displayPlanetPopup('.Pluto', '#Pluto')
displayPlanetPopup('.Makemake', '#Makemake')
displayPlanetPopup('.Gonggong', '#Gonggong')
displayPlanetPopup('.Ceres', '#Ceres')
displayPlanetPopup('.Orcus', '#Orcus')
displayPlanetPopup('.Quaoar', '#Quaoar')
displayPlanetPopup('.Haumea', '#Haumea')
displayPlanetPopup('.Eris', '#Eris')
displayPlanetPopup('.Sedna', '#Sedna')
displayPlanetPopup('.Uranus', '#Uranus')
displayPlanetPopup('.Neptune', '#Neptune')