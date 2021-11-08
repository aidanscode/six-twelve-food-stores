import React, { useState } from 'react';
import NutritionalFactsBox from './NutritionalFactsBox';
import BuilderBox from './BuilderBox';

function Page() {
  const [menuSelections, setMenuSelections] = useState({
    'Temperature': null,
    'Sandwich Size': null,
    'Bread Type': null,
    'Meat': null,
    'Cheese': null,
    'Spread': null,
    'Topping': null
  });

  return <div className='row mb-5'>
    <BuilderBox menuSelections={menuSelections} setMenuSelections={setMenuSelections} />
    <NutritionalFactsBox />
  </div>
}

export default Page;
