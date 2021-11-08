import React, { useState } from 'react';
import MenuSelection from './views/MenuSelection';
import LoadingMenu from './views/LoadingMenu';
import Disclaimer from './views/Disclaimer';
import Locations from './views/Locations';
import Complete from './views/Complete';

function OptionsBox({ menuSelections, setMenuSelections }) {
  const showLocationsView = () => setCurrentView(<Locations selectLocation={selectLocation} />);
  const finishedBuilding = () => setCurrentView(<Complete />);
  const selectLocation = async location => {
    setCurrentView(<LoadingMenu />);

    const menuResponse = await axios.get(location.menu_url);
    setCurrentView(
      <MenuSelection
        menu={menuResponse.data.menu}
        menuSelections={menuSelections}
        setMenuSelections={setMenuSelections}
        done={finishedBuilding}
      />
    );
  };
  const [currentView, setCurrentView] = useState(<Disclaimer acceptDisclaimer={showLocationsView} />);

  return <div className='col-12 col-lg-9'>
    <div className='builder-section-box w-100 bg-white'>
      <div className='container my-3'>
        {currentView}
      </div>
    </div>
  </div>
}

export default OptionsBox;
