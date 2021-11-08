import React, { useState, useEffect } from 'react';

function Locations({ selectLocation }) {
  const [locations, setLocations] = useState([]);

  useEffect(() => {
    axios.get('/api/location').then(res => {
      setLocations(res.data.locations);
    });
  }, []);

  return <>
    <h5>Select a Location</h5>

    {locations.length === 0 ?
      <p>Loading...</p>
      :
      <div className='row'>
        {locations.map(location => {
          return <div key={location.id} className='col-12 col-md-6 text-center'>
            <div className='clickable' onClick={() => selectLocation(location)}>
              <h1><i className="bi bi-shop"></i></h1>
              <h5>{location.name}</h5>
              <h6>({location.address})</h6>
            </div>
          </div>
        })}
      </div>
    }
  </>
}

export default Locations;
