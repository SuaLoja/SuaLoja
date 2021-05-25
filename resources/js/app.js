import React from 'react'
import { render } from 'react-dom'
import { InertiaApp } from '@inertiajs/inertia-react'
import { InertiaProgress } from '@inertiajs/progress'

InertiaProgress.init()

const app = document.getElementById('app')

render(
  <InertiaApp
    initialPage={JSON.parse(app.dataset.page)}
    resolveComponent={name => require(`./Pages/${name}`).default}
  />,
  app
)
