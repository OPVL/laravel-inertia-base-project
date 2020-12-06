import React, { useState } from 'react'
import { usePage } from '@inertiajs/inertia-react'
import { Inertia } from '@inertiajs/inertia'

export default function Register() {
    const [username, setUsername] = useState('')
    const [password, setPassword] = useState('')

    const handleLogin = () => {
      Inertia.post('auht.register', {
        email: username,
        password,
      })
    }
  
    const handleKeyUp = (event) => {
      if (event.key !== 'Enter') return
  
      handleLogin()
    }
  
    return (
      <h1>Hello</h1>
    )
  }