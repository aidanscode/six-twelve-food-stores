import React, { useState } from 'react';
import NutritionalFactsBox from './NutritionalFactsBox';
import BuilderBox from './BuilderBox';
import MenuUtils from './MenuUtils';

function Page() {
  const [menuSelections, setMenuSelections] = useState(MenuUtils.getDefaultMenu());

  return <div className='row mb-5'>
    <BuilderBox menuSelections={menuSelections} setMenuSelections={setMenuSelections} />
    <NutritionalFactsBox menuSelections={menuSelections} />
  </div>
}

export default Page;
