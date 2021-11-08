import React from 'react';
import MySelectionsBox from './MySelectionsBox';
import OptionsBox from './OptionsBox';

function BuilderBox({ menuSelections, setMenuSelections }) {
  return <div className='col-12 col-lg-9'>
    <div className='bg-secondary-light p-3'>
      <div className='row g-3'>
        <OptionsBox menuSelections={menuSelections} setMenuSelections={setMenuSelections} />
        <MySelectionsBox menuSelections={menuSelections} />
      </div>
    </div>
  </div>
}

export default BuilderBox;
