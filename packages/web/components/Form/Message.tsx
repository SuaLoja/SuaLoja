import React from 'react'

export enum MessageType {
  error = 'bg-red-500',
  sucess = 'bg-green-500'
}

interface MessageProps {
  type: MessageType
  text: string
}

const Message: React.FC<MessageProps> = ({ type, text }) => {
  return (
    <div
      className={`text-center ${type} mb-4 py-3 px-3 sm:px-6 lg:px-8 rounded`}
    >
      <p className="font-medium text-white">{text}</p>
    </div>
  )
}

export default Message
