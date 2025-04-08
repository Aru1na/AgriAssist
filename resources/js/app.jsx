import React from 'react'
import ReactDOM from 'react-dom/client'
import { AppSidebar } from './components/AppSidebar'

function App() {
  return (
    <div>
      <MySidebar />
      <div className="content">
        <h1>Hello from React + Laravel + ShadCN UI!</h1>
      </div>
    </div>
  )
}

ReactDOM.createRoot(document.getElementById('app')).render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
)
