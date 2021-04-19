import React from 'react'
import { useSession, signOut } from 'next-auth/client'

export default function Dashboard(): React.ReactElement {
  const [session, loading] = useSession()
  const expireDate = session ? new Date(session.expires) : null

  if (loading) {
    return <p>Loading...</p>
  }

  return (
    <>
      {!session && (
        <>
          Not signed in <br />
          <a href="/signin">Sign in</a>
        </>
      )}
      {session && (
        <>
          Signed in as: {session.user.name}/{session.user.email}
          <br />
          Session expire date: {expireDate.toUTCString()}
          <br />
          <button onClick={() => signOut()}>Sign out</button>
        </>
      )}
    </>
  )
}
