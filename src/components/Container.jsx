import React from 'react';

export default function Container({ children, classMapper }) {
  const defaultClasses = "container mx-auto";
  const classMapper = classMapper ? " " + classMapper : "";

  return (
    <div className={defaultClasses + classMapper}>
      {children}
    </div>
  );
}
