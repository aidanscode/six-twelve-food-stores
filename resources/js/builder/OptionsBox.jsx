import React, { useState } from 'react';
import MenuSelection from './views/MenuSelection';
import LoadingMenu from './views/LoadingMenu';
import Disclaimer from './views/Disclaimer';
import Locations from './views/Locations';
import Complete from './views/Complete';
import MenuUtils from './MenuUtils';

function OptionsBox({ menuSelections, setMenuSelections }) {
  const [currentViewMode, setCurrentViewMode] = useState('disclaimer');
  const [menu, setMenu] = useState(null);

  const getCurrentView = () => {
    if (currentViewMode === 'disclaimer') {
      return <Disclaimer acceptDisclaimer={showLocationsView} />;
    } else if (currentViewMode === 'locations') {
      return <Locations selectLocation={selectLocation} />;
    } else if (currentViewMode === 'complete') {
      return <Complete restart={restart} />;
    } else if (currentViewMode === 'loadingMenu') {
      return <LoadingMenu />;
    } else if (currentViewMode === 'menuSelection') {
      return <MenuSelection
        menu={menu}
        menuSelections={menuSelections}
        setMenuSelections={setMenuSelections}
        done={finishedBuilding}
      />
    }
  };

  const restart = () => {
    setMenuSelections(MenuUtils.getDefaultMenu());
    showLocationsView();
  };
  const showLocationsView = () => setCurrentViewMode('locations');
  const finishedBuilding = () => setCurrentViewMode('complete');
  const selectLocation = async location => {
    setCurrentViewMode('loadingMenu');

    const response = await axios.get(location.menu_url);
    setMenu(response.data.menu);
    setCurrentViewMode('menuSelection');
  };

  return <div className='col-12 col-lg-9'>
    <div className='builder-section-box w-100 bg-white'>
      <div className='container my-3'>
        {getCurrentView()}
      </div>
    </div>
  </div>
}

export default OptionsBox;
