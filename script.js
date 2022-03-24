function displayPlanetPopup(planetClass, planetId) {
    document.querySelector(planetClass).addEventListener('mouseover', (event) => {
        document.querySelector(planetId).classList.remove('hidden-on-desktop')
        document.querySelector(planetClass).classList.add('hover')
        console.log('Hi');
    })

    document.querySelector(planetClass).addEventListener('mouseout', (event) => {
        document.querySelector(planetId).classList.add('hidden-on-desktop')
        document.querySelector(planetClass).classList.remove('hover')
    })
}

displayPlanetPopup('.Earth', '#planet-1')
displayPlanetPopup('.Mercury', '#planet-2')
displayPlanetPopup('.Venus', '#planet-3')
displayPlanetPopup('.Mars', '#planet-4')
displayPlanetPopup('.Jupiter', '#planet-5')
displayPlanetPopup('.Saturn', '#planet-6')
displayPlanetPopup('.Pluto', '#planet-10')
displayPlanetPopup('.Makemake', '#planet-12')
displayPlanetPopup('.Gonggong', '#planet-16')
displayPlanetPopup('.Ceres', '#planet-9')
displayPlanetPopup('.Orcus', '#planet-14')
displayPlanetPopup('.Quaoar', '#planet-15')
displayPlanetPopup('.Haumea', '#planet-11')
displayPlanetPopup('.Eris', '#planet-13')
displayPlanetPopup('.Sedna', '#planet-17')
displayPlanetPopup('.Uranus', '#planet-7')
displayPlanetPopup('.Neptune', '#planet-8')