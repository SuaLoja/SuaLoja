import React from 'react'

interface MessageProps {
  color: string
  text: string
}

const Message: React.FC<MessageProps> = ({ color, text }) => {
  return (
    <div className={`text-center bg-${color} mb-4 py-3 px-3 sm:px-6 lg:px-8`}>
      <p className="font-medium text-white">{text}</p>
    </div>
  )
}

export default Message
